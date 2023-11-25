<?php
$allowedImages = array(
    /// image
    'image/jpeg',
    'image/pjpeg', // Progressive JPEG
    'image/png',
    'image/gif',
    'image/bmp',
    'image/tiff',
    'image/webp'
    // You can add more image MIME types here if needed
);
$allowedTexts = array(
    'text/plain', // Plain text
    'text/html', // HTML files
    'application/xhtml+xml', // XHTML files
    'text/css', // Cascading Style Sheets
    'application/xml', // XML files
    'application/json', // JSON files
    'application/javascript', // JavaScript files
    'application/ecmascript', // ECMAScript files
    'application/typescript' // TypeScript files
    // You can add more text MIME types here if needed
);
$allowedDocs = array(
    'application/msword', // Microsoft Word document
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // DOCX file
    'application/vnd.oasis.opendocument.text', // OpenDocument Text
    'application/rtf', // Rich Text Format
    'application/pdf', // Portable Document Format
    'application/vnd.ms-powerpoint', // Microsoft PowerPoint presentation
    'application/vnd.openxmlformats-officedocument.presentationml.presentation', // PPTX file
    'application/vnd.oasis.opendocument.presentation', // OpenDocument Presentation
    'application/vnd.ms-excel', // Microsoft Excel spreadsheet
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // XLSX file
    'application/vnd.oasis.opendocument.spreadsheet' // OpenDocument Spreadsheet
    // You can add more document MIME types here if needed
);
$allowedZips = array(
    'application/zip', // ZIP archive
    'application/x-zip-compressed', // ZIP archive (alternative MIME type)
    'application/x-tar', // Tar archive
    'application/x-gzip', // Gzip archive
    'application/x-bzip2', // Bzip2 archive
    'application/x-7z-compressed', // 7z archive
    'application/x-rar-compressed' // RAR archive
    // You can add more archive MIME types here if needed
);

$allowedTypes = array_merge($allowedImages,$allowedDocs,$allowedTexts,$allowedZips);
