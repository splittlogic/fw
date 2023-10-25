<?php 
/********************
*   Boostrap Modal  *
*********************
*
*   Usage:  modal::get()    - returns html formatted modal
*               Pipes:
*                   body()
*                   footer()
*                   lg()
*                   sm()
*                   title()
*                   xl()
*
*           modal::button() - returns html formatted modal trigger button
*               get() must be run before button()
*               Pipes:
*                   class()
*                   danger()
*                   dark()
*                   info()
*                   light()
*                   outline()
*                   primary()
*                   secondary()
*                   success()
*                   warning()
*
*   Functions:
*
*       body()      - Set content of body element
*       button()    - Returns html formatted modal trigger button
*       class()     - Set class(es) for modal trigger button
*       danger()    - Set modal trigger button as danger
*       dark()      - Set modal trigger button as dark
*       footer()    - Set content of footer element
*       get()       - Returns html formatted modal
*       info()      - Set modal trigger button as info
*       lg()        - Set modal size as lg
*       light()     - Set modal trigger button as light
*       outline()   - Set modal trigger button as outline
*       primary()   - Set modal trigger button as primary (default if none set)
*       secondary() - Set modal trigger button as secondary
*       sm()        - Set modal size as sm
*       success()   - Set modal trigger button as success
*       title()     - Set content of title element
*       warning()   - Set modal trigger button as warning
*       xl()        - Set modal size as xl
*
*/

if (! class_exists('modal')) {
    class modal
    {


        // Variables
        public static $body = null;
        public static $class = null;
        public static $color = null;
        public static $footer = null;
        public static $id = 0;
        public static $lg = null;
        public static $outline = null;
        public static $sm = null;
        public static $title = null;
        public static $xl = null;

        // Set content of body element
        public static function body($content = null)
        {
            self::$body = $content;
            return new static();
        }

        // Returns html formatted modal trigger button
        public static function button($value)
        {
            // Declare return
            $x = null;

            // Declare class
            $c = null;

            // Declare class count
            $cCount = 0;

            // Check classes
            if (!is_null(self::$class))
            {
                if (is_array(self::$class))
                {
                    $cCount = count(self::$class);
                    foreach (self::$class as $cl)
                    {
                        $c .= $cl;
                        if ($cCount != 1)
                        {
                            $c .= ' ';
                        }
                        $cCount--;
                    }
                } else {
                    $c = self::$class;
                }

                // Add leading space for correct formatting
                $c = ' ' . $c;
            }

            // Check for color
            if (is_null(self::$color))
            {
                self::$color = 'primary';
            }

            // Create button 
            $x = '<button type="button" class="btn btn-' . self::$outline . self::$color . $c . '" data-bs-toggle="modal" data-bs-target="#AJModal-' . self::$id . '">'
                .   $value 
                . '</button>';

            // Reset values
            self::$class = null;
            self::$color = null;

            // Return modal trigger button
            return $x;
            
        }

        // Set class(es) for modal trigger button
        public static function class($class)
        {
            self::$class = $class;
            return new static();
        }

        // Set modal trigger button as danger
        public static function danger()
        {
            self::$color = 'danger';
            return new static();
        }

        // Set modal trigger button as dark
        public static function dark()
        {
            self::$color = 'dark';
            return new static();
        }

        // Set content of footer element
        public static function footer($content = null)
        {
            self::$footer = $content;
            return new static();
        }

        // Returns html formatted modal
        public static function get()
        {
            // Declare return 
            $x = null;

            // Update id
            self::$id++;

            // Check for modal size
            if (self::$sm == true)
            {
                $dialog = '<div class="modal-dialog modal-sm">';
            } elseif (self::$lg == true) {
                $dialog = '<div class="modal-dialog modal-lg">';
            } elseif (self::$xl == true) {
                $dialog = '<div class="modal-dialog modal-xl">';
            } else {
                $dialog = '<div class="modal-dialog">';
            }

            // Begin Modal
            $x = '<div class="modal fade" id="AJModal-' . self::$id . '" tabindex="-1" aria-labelledby="AJModal-' . self::$id . 'label" aria-hidden="true">'
                .   $dialog
                .       '<div class="modal-content">'
                .           '<div class="modal-header">'
                .               '<h1 class="modal-title fs-5" id="AJModal-' . self::$id . '">'
                .                   self::$title 
                .               '</h1>'
                .               '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'
                .           '</div>'
                .           '<div class="modal-body">'
                .               self::$body 
                .           '</div>';

            // Check for footer
            if (!is_null(self::$footer))
            {
                $x .=       '<div class="modal-footer">'
                    .           self::$footer 
                    .       '</div>';
            }

            // Close Modal
            $x .=       '</div>'
                .   '</div>'
                . '</div>';

            // Reset values
            self::$body = null;
            self::$class = null;
            self::$footer = null;
            self::$lg = null;
            self::$sm = null;
            self::$title = null;
            self::$xl = null;

            // Return Modal
            return $x;

        }

        // Set modal trigger button as info
        public static function info()
        {
            self::$color = 'info';
            return new static();
        }

        // Set modal size as lg
        public static function lg()
        {
            self::$lg = true;
            return new static();
        }

        // Set modal trigger button as light
        public static function light()
        {
            self::$color = 'light';
            return new static();
        }

        // Set modal trigger button as outline
        public static function outline()
        {
            self::$outline = 'outline-';
            return new static();
        }

        // Set modal trigger button as primary (default if none set)
        public static function primary()
        {
            self::$color = 'primary';
            return new static();
        }

        // Set modal trigger button as secondary
        public static function secondary()
        {
            self::$color = 'secondary';
            return new static();
        }

        // Set modal size as sm
        public static function sm()
        {
            self::$sm = true;
            return new static();
        }

        // Set modal trigger button as success
        public static function success()
        {
            self::$color = 'success';
            return new static();
        }

        // Set content of title element
        public static function title($content = null)
        {
            self::$title = $content;
            return new static();
        }

        // Set modal trigger button as warning
        public static function warning()
        {
            self::$color = 'warning';
            return new static();
        }

        // Set modal size as xl
        public static function xl()
        {
            self::$xl = true;
            return new static();
        }


    }
}