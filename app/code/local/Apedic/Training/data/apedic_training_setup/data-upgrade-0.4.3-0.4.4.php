<?php
const TYPE_PAGE=1;
const TYPE_PRODUCT=2;

$comments = array(
    array(
        'page_id' => '1',
        'page_type' => TYPE_PAGE,
        'comment_text'=>'first page comment'
    ),
    array(
        'page_id' => '406',
        'page_type' => TYPE_PRODUCT,
        'comment_text'=>'second product comment'
    ),array(
        'page_id' => '1',
        'page_type' => TYPE_PRODUCT,
        'comment_text'=>'third product comment'
    ),
);

foreach ($comments as $comment) {
    Mage::getModel('apedic_training/comments')
        ->setData($comment)
        ->save();
}
