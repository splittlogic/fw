<?php 
/*******************
*   Boostrap Card  *
********************
*
*   Usage:  card::get()  - returns html formatted boostrap card element
*               Pipes:
*                   bg()
*                   body()
*                   danger()
*                   dark()
*                   header()
*                   id()
*                   info()
*                   light()
*                   primary()
*                   secondary()
*                   subtitle()
*                   success()
*                   title()
*                   warning()
*
*   Functions:
*
*       bg()        - Set bg color - primary, secondary, success, danger, warning, info, light, or dark
*       body()      - Set content of body element
*       danger()    - Set Card as danger
*       dark()      - Set Card as dark
*       get()       - Returns html formatted card
*       header()    - Set content of header
*       id()        - Set id of card element
*       info()      - Set Card as info
*       light()     - Set Card as light
*       primary()   - Set Card as primary
*       secondary() - Set Card as secondary
*       subtitle()  - Set content of subtitle element
*       success()   - Set Card as success
*       title()     - Set content of title element
*       warning()   - Set Card as warning
*
*/

if (! class_exists('card')) {
    class card
    {


        // Variables
        public static $bg = null;
        public static $body = null;
        public static $footer = null;
        public static $header = null;
        public static $id = null;
        public static $subtitle = null;
        public static $title = null;

        // Set bg color - primary, secondary, success, danger, warning, info, light, or dark
        public static function bg($color)
        {
            self::$bg = ' text-bg-' . $color . ' mb-3';
            return new static();
        }

        // Set content of body element
        public static function body($content)
        {
            self::$body = $content;
            return new static();
        }

        // Set content of footer element
        public static function footer($content)
        {
            self::$footer = $content;
            return new static();
        }

        // Set Card as danger
        public static function danger()
        {
            return self::bg('danger');
        }

        // Set Card as dark
        public static function dark()
        {
            return self::bg('dark');
        }

        // Returns html formatted card
        public static function get()
        {
            // Declare return
            $x = null;

            // Variables
            $body = null;
            $footer = null;
            $header = null;
            $id = null;
            $subtitle = null;
            $title = null;

            // Check for body
            if (!is_null(self::$body))
            {
                $body = '<p class="card-text">' . self::$body . '</p>';
            }

            // Check for footer
            if (!is_null(self::$footer))
            {
                $footer = '<div class="card-footer">' . self::$footer . '</div>';
            }

            // Check for header
            if (!is_null(self::$header))
            {
                $header = '<div class="card-header fw-bold">' . self::$header . '</div>';
            }

            // Check for id
            if (!is_null(self::$id))
            {
                $id = ' id="' . self::$id . '"';
            }

            // Check for subtitle
            if (!is_null(self::$subtitle))
            {
                $subtitle = '<h6 class="card-subtitle mb-2 text-body-secondary">' . self::$subtitle . '</h6>';
            }

            // Check for title
            if (!is_null(self::$title))
            {
                $title = '<h5 class="card-title">' . self::$title . '</h5>';
            }

            // Create Card
            $x = '<div class="card' . self::$bg . '"' . $id . '>'
                .   $header
                .   '<div class="card-body">'
                .       $title
                .       $subtitle
                .       $body
                .   '</div>'
                .   $footer
                . '</div>';

            // Reset Values
            self::$bg = null;
            self::$body = null;
            self::$footer = null;
            self::$header = null;
            self::$id = null;
            self::$subtitle = null;
            self::$title = null;

            // Return Card
            return $x;
        }

        // Set content of header
        public static function header($content)
        {
            self::$header = $content;
            return new static();
        }

        // Set id of card element
        public static function id($value)
        {
            self::$id = $value;
            return new static();
        }

        // Set Card as info
        public static function info()
        {
            return self::bg('info');
        }

        // Set Card as light
        public static function light()
        {
            return self::bg('light');
        }

        // Set Card as primary
        public static function primary()
        {
            return self::bg('primary');
        }

        // Set Card as secondary
        public static function secondary()
        {
            return self::bg('secondary');
        }

        // Set content of subtitle element
        public static function subtitle($content)
        {
            self::$subtitle = $content;
            return new static();
        }

        // Set Card as success
        public static function success()
        {
            return self::bg('success');
        }

        // Set content of title element
        public static function title($content)
        {
            self::$title = $content;
            return new static();
        }

        // Set Card as warning
        public static function warning()
        {
            return self::bg('warning');
        }


    }

}