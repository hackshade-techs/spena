<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

 private function about()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    private function alumni()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

    private function classes()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
     private function contact()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

    private function gallery()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    private function news()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    //non teaching staff
    private function non_teaching_staff()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
   
    //single classes
      private function single_classes()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    
    //single page for news
       private function single_news()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    //page for staff

  private function staff()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    
    //Teaching Staff
    private function teaching_staff()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }


    //Events page
        private function events()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

    private function documents()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    //payments page

    private function payments()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

    private function single_event()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_title',
                        'label'    => 'Meta Title',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_description',
                        'label'    => 'Meta Description',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name'     => 'meta_keywords',
                        'type'     => 'textarea',
                        'label'    => 'Meta Keywords',
                        'fake'     => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
    
}
