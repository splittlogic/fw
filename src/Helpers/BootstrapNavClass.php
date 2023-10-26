<?php 


/*
|
|--------------------
|   Bootstrap Nav   |
|--------------------
|
|   Functions:
|
|       active()    - Set link as active
|       addItem()   - Add recent item to items array
|       addLink()   - Add recent link to links array
|       disabled()  - Set link as disabled
|       fill()      - Set fill class to nav element
|       get()       - Return html nav element
|       item()      - Set nav item element
|       justified() - Set justified class to nav element
|       link()      - Set nav link element
|       pills()     - Set pills class to nav element
|       underline() - Set underline class to nav element
|
*/


if (! class_exists('nav'))
{
    class nav 
    {


        // Variables
        protected static $fill = null;
        protected static $link = null;
        protected static $links = array();
        protected static $item = null;
        protected static $items = array();
        protected static $justified = null;
        protected static $pills = null;
        protected static $underline = null;


        // Set link as active
        public static function active()
        {

            fw::class('active');
            fw::aria('current', 'page');

            return new static();

        }


        // Add recent item to items array
        public static function addItem()
        {

            // Check link variable
            if (!is_null(self::$item))
            {
                self::$items[] = self::$item;
            }

            return new static();

        }


        // Add recent link to links array
        public static function addLink()
        {

            // Check link variable
            if (!is_null(self::$link))
            {
                self::$links[] = self::$link;
            }

            return new static();

        }


        // Set link as disabled
        public static function disabled()
        {

            fw::class('disabled');
            fw::aria('disabled', 'true');

            return new static();

        }


        // Set fill class to nav element
        public static function fill()
        {

            self::$fill = true;
            return new static();

        }


        // Return html nav element
        public static function get()
        {

            $x = null;

            // Check pills
            if (!is_null(self::$pills))
            {
                fw::class('nav-pills');
            }

            // Check fill
            if (!is_null(self::$fill))
            {
                fw::class('nav-fill');
            }

            // Check justified
            if (!is_null(self::$justified))
            {
                fw::class('nav-justified');
            }

            // Check underline
            if (!is_null(self::$underline))
            {
                fw::class('nav-underline');
            }

            // Check for items
            if (empty(self::$items))
            {

                // Check for links
                if (!empty(self::$links))
                {
                    fw::class('nav');
                    $x = fw::tag('nav', self::$links);
                }

            } else {

                // Create list element
                fw::class('nav');
                $x = fw::tag('ul', self::$items);

            }

            // Reset variables
            self::$fill = null;
            self::$link = null;
            self::$links = array();
            self::$item = null;
            self::$items = array();
            self::$justified = null;
            self::$pills = null;
            self::$underline = null;

            return $x;

        }


        // Set nav item element
        public static function item($content = null, $href = null)
        {

            // Check for content
            if (!is_null($content))
            {

                self::link($content, $href);

            }

            fw::class('nav-item');
            self::$item = fw::tag('li', self::$link);
            self::addItem();

            return new static();

        }


        // Set justified class to nav element
        public static function justified()
        {

            self::$justified = true;
            return new static();

        }


        // Set nav link element
        public static function link($content = null, $href = null)
        {

            // Set nav-link class
            fw::class('nav-link');

            // Set href
            fw::href($href);

            // Set link
            self::$link = fw::tag('a', $content);

            // Add to links
            self::addLink();

            return new static();

        }


        // Set pills class to nav element
        public static function pills()
        {

            self::$pills = true;
            return new static();

        }


        // Set underline class to nav element
        public static function underline()
        {

            self::$underline = true;
            return new static();

        }


    }
}