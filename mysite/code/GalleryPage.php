<?php

class GalleryPage extends Page {

    private static $description = 'Photo gallery';

    static $can_be_root = false;

    private static $has_one = array (
        'Photo' => 'Image',
        'GalleryPage' => 'GalleryPage',
    );

    private static $has_many = array (
        'GalleryPhotos' => 'Gallery'
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        $gridFieldConfig = GridFieldConfig_RecordEditor::create(20);
        $gridFieldConfig->addComponent(new GridFieldBulkUpload());

        $gridFieldConfig->getComponentByType('GridFieldBulkUpload')
            ->setUfSetup('setFolderName', 'ur-folder-name')
            ->setUfConfig('sequentialUploads', true);

        $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
        $gridfield = new GridField("GalleryPhotos", "Gallery Images", $this->GalleryPhotos()->sort("SortOrder"), $gridFieldConfig);

        $fields->addFieldToTab('Root.ImageGallery', $gridfield);


        return $fields;
    }
}
