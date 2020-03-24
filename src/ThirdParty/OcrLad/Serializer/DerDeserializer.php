<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Serializer;

use WBW\Library\Core\ThirdParty\OcrLad\Model\Document;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Page;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Word;

/**
 * DER deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Serializer
 */
class DerDeserializer {

    /**
     * DER delimiter.
     *
     * @var string
     */
    const DER_DELIMITER = ";";

    /**
     * Deserialize a document.
     *
     * @param string $filename The filename.
     * @return Document|null Returns the document in case of success, null otherwise.
     */
    public static function deserializeDocument($filename) {

        $model = new Document();
        $model->setFilename($filename);

        $stream = fopen($filename, "r");

        $headers = DerDeserializer::splitHeader(fgets($stream));
        foreach ($headers as $current) {

            $page = DerDeserializer::deserializePage($current);
            if (null !== $page) {
                $model->addPage($page);
            }
        }

        while (true !== feof($stream)) {

            $word = DerDeserializer::deserializeWord(fgets($stream));
            if (null !== $word) {
                $model->addWord($word);
            }
        }

        fclose($stream);

        return DerDeserializer::paginate($model);
    }

    /**
     * Deserialize a page.
     *
     * @param string $rawData The raw data.
     * @return Page|null Returns the page in case of success, null otherwise.
     */
    protected static function deserializePage($rawData) {

        $data = explode(DerDeserializer::DER_DELIMITER, $rawData);
        if (6 !== count($data)) {
            return null;
        }

        $model = new Page();
        $model->setResolution(intval(preg_replace("/[^0-9]/", "", $data[0])));
        $model->setWidth(intval($data[1]));
        $model->setHeight(intval($data[2]));
        $model->setRotation(intval($data[3]));
        $model->setTag(intval($data[4]));

        return $model;
    }

    /**
     * Deserialize a word.
     *
     * @param string $rawData The raw data.
     * @return Word|null Returns the word in case of success, null otherwise.
     */
    protected static function deserializeWord($rawData) {

        $data = explode(DerDeserializer::DER_DELIMITER, $rawData);
        if (7 !== count($data)) {
            return null;
        }

        $model = new Word();
        $model->setContent(trim($data[0]));
        $model->setType(trim($data[1]));
        $model->setOcrConfidence(floatval(str_replace(",", ".", $data[2])));
        $model->setX1(floatval($data[3]));
        $model->setY1(floatval($data[4]));
        $model->setX2(floatval($data[5]));
        $model->setY2(floatval($data[6]));

        return $model;
    }

    /**
     * Paginate.
     *
     * @param Document $document The document.
     * @return Document Returns the document.
     */
    protected static function paginate(Document $document) {

        $last = 0;
        $page = 0;

        foreach ($document->getWords() as $current) {

            if ($current->getY1() < $last) {
                $last = 0;
                ++$page;
            }

            $last = $current->getY1();

            $document->getPages()[$page]->addWord($current);
        }

        return $document;
    }

    /**
     * Split an header.
     *
     * @param string $rawData The raw data.
     * @return string[] Returns the headers.
     */
    protected static function splitHeader($rawData) {

        $data = explode(DerDeserializer::DER_DELIMITER, $rawData);
        if (6 === count($data)) {
            return [$rawData];
        }

        $rows   = [];
        $buffer = [];

        foreach ($data as $current) {

            $buffer[] = $current;
            if (6 === count($buffer)) {

                $rows[] = implode(DerDeserializer::DER_DELIMITER, $buffer);
                $buffer = [];
            }
        }

        return $rows;
    }
}