<?php



/**
 * -----------------------New Features---------------
 * New mysqli_execute_query function and mysqli::execute_query method.
 * New #[\AllowDynamicProperties] and #[\SensitiveParameter] attributes.
 * New ZipArchive::getStreamIndex, ZipArchive::getStreamName, and ZipArchive::clearError methods.
 * New ReflectionFunction::isAnonymous and ReflectionMethod::hasPrototype methods.
 * New curl_upkeep, memory_reset_peak_usage, ini_parse_quantity, libxml_get_external_entity_loader, sodium_crypto_stream_xchacha20_xor_ic, openssl_cipher_key_length functions.
 */


/**
 * --------------- Deprecations----------------
 * Deprecated ${} string interpolation.
 * Deprecated utf8_encode and utf8_decode functions.
 * Methods DateTime::createFromImmutable and DateTimeImmutable::createFromMutable has a tentative return type of static.
 * Extensions ODBC and PDO_ODBC escapes the username and password.
 * Functions strtolower and strtoupper are no longer locale-sensitive.
 * Methods SplFileObject::getCsvControl, SplFileObject::fflush, SplFileObject::ftell, SplFileObject::fgetc, and SplFileObject::fpassthru enforces their signature.
 * Method SplFileObject::hasChildren has a tentative return type of false.
 * Method SplFileObject::getChildren has a tentative return type of null.
 * The internal method SplFileInfo::_bad_state_ex has been deprecated.
 */
