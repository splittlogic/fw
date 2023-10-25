<?php 
/********************
*   Bootstrap Span  *
*********************
*
*   Functions:
*       class()     - Set class(es) of span element
*       color()     - Set color of span text
*       danger()    - Set text color as danger
*       dark()      - Set text color as dark
*       get()       - Returns html formatted span element
*       info()      - Set text color as info
*       light()     - Set text color as light
*       primary()   - Set text color as primary
*       secondary() - Set text color as secondary
*       select()    - Set click selection - all, auto, or none
*       success()   - Set text color as success
*       warning()   - Set text color as warning
*       white()     - Set text color as white
*
*/

if (! class_exists('span')) {
    class span 
    {


        // Variables
        public static $class = null;
        public static $color = null;
        public static $select = null;

        // Set class(es) of span element
        public static function class($value)
        {
            self::$class = $value;
            return new static();
        }

        // Set color of span text 
        public static function color($value)
        {
            self::$color = $value;
            return new static();
        }

        // Set text color as danger
        public static function danger()
        {
            return self::color('danger');
        }

        // Set text color as dark
        public static function dark()
        {
            return self::color('dark');
        }

        // Returns html formatted span element
        public static function get($value = null)
        {
            // Declare Variables 
            $c = null;
            $cCount = 0;
            $x = null;

            // Check class(es)
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
            if (!is_null(self::$color))
            {
                self::$color = 'text-' . self::$color;
            }

            // Check for select
            if (!is_null(self::$select))
            {
                self::$select = ' user-select-' . self::$select;
            }

            // Create span element 
            $x = '<span class="' . self::$color . $c . self::$select . '">' . $value . '</span>';

            // Reset values
            self::$class = null;
            self::$color = null;
            self::$select = null;

            // Return span element 
            return $x;
        }

        // Set text color as info
        public static function info()
        {
            return self::color('info');
        }

        // Set text color as light
        public static function light()
        {
            return self::color('light');
        }

        // Set text color as primary
        public static function primary()
        {
            return self::color('primary');
        }

        // Set text color as secondary
        public static function secondary()
        {
            return self::color('secondary');
        }

        // Set click selection - all, auto, or none
        public static function select($value)
        {
            self::$select = $value;
            return new static();
        }

        // Set text color as success
        public static function success()
        {
            return self::color('success');
        }

        // Set text color as warning
        public static function warning()
        {
            return self::color('warning');
        }

        // Set text color as white
        public static function white()
        {
            return self::color('white');
        }


    }
}