<?php

declare(strict_types=1);

namespace Zanzara\Telegram\Type\Passport;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered
 * resolved when the file changes.
 *
 * More on https://core.telegram.org/bots/api#passportelementerrortranslationfile
 */
class PassportElementErrorTranslationFile extends PassportElementError
{

    /**
     * Error source, must be translation_file
     *
     * @var string
     */
    private $source;

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of "passport", "driver_license",
     * "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement",
     * "passport_registration", "temporary_registration"
     *
     * @var string
     */
    private $type;

    /**
     * Base64-encoded file hash
     *
     * @var string
     */
    private $file_hash;

    /**
     * Error message
     *
     * @var string
     */
    private $message;


    /**
     * @return string
     */
    public function getFileHash(): string
    {
        return $this->file_hash;
    }

    /**
     * @param string $file_hash
     */
    public function setFileHash(string $file_hash): void
    {
        $this->file_hash = $file_hash;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}