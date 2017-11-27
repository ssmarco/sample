<?php

class Gallery extends DataObject {

    private static $db = array (
        'PhotoCaption' => 'Varchar(255)',
        'SortOrder' => 'Int'
    );

    private static $has_one = array (
        'Photo' => 'Image',
        'GalleryPage' => 'GalleryPage',
    );

    private static $summary_fields = array (
        'GridThumbnail' => '',
        'PhotoCaption' => 'PhotoCaption',
    );

    public static $default_sort='SortOrder';

    public function getGridThumbnail() {
        if($this->Photo()->exists()) {
            return $this->Photo()->SetWidth(100);

        }
        return "(no image)";
    }

    public function getCMSFields() {
        $fields = FieldList::create(
            TextField::create('PhotoCaption'),
            $uploader = UploadField::create('Photo'),
            $sortOrder = NumericField::create('SortOrder')
        );

        return $fields;
    }
}
