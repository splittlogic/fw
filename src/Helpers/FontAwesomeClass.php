<?php 
/************************
*   Font Awesome Icons  *
*************************
*
*   Usage:  fa::brands()->get() - returns html formatted font awesome icon (brands, regular, or solid must be selected before get())
*               Pipes:
*                   animation()
*                   beat()
*                   beatfade()
*                   bounce()
*                   brands()
*                   fade()
*                   flip()
*                   flipb()
*                   fliph()
*                   flipv()
*                   id()
*                   lg()
*                   regular()
*                   rotate()
*                   shake()
*                   size()
*                   sm()
*                   solid()
*                   spin()
*                   spinpulse()
*                   spinreverse()
*                   type()
*                   xl()
*                   xs()
*
*   Functions:
* 
*       animation()     - Set icon animation - beat, beat-fade, bounce, fade, flip, shake, spin, spin-pulse, or spin-reverse
*       beat()          - Set icon animation as beat
*       beatfade()      - Set icon animation as beat-fade
*       bounce()        - Set icon animation as bounce
*       brands()        - Set icon type as brands
*       fade()          - Set icon animation as fade
*       flip()          - Set icon animation as flip
*       flipb()         - Set icon flip both horizontal & vertical
*       fliph()         - Set icon flip horizontal
*       flipv()         - Set icon flip vertical
*       get()           - Returns html formatted Font Awesome icon
*       id()            - Set id of icon element
*       lg()            - Set icon size to lg
*       regular()       - Set icon type as regular
*       rotate()        - Set icon rotation - 90, 180, and 270
*       shake()         - Set icon animation as shake
*       size()          - Set icon size - 2xs, xs, sm, lg, xl, 2xl
*       sm()            - Set icon size to sm
*       solid()         - Set icon type as solid
*       spin()          - Set icon animation as spin
*       spinpulse()     - Set icon animation as spin-pulse
*       spinreverse()   - Set icon animation as spin-reverse
*       type()          - Set icon type - brands, regular, or solid
*       xl()            - Set icon size to xs or 2xl
*       xs()            - Set icon size to xs or 2xs
*
*/

if (! class_exists('fa')) {


    class fa
    {


        // Variables
        public static $animation = null;
        public static $flip = null;
        public static $id = null;
        public static $rotate = null;
        public static $size = null;
        public static $type = null;

        // Set icon animation
        public static function animation($value)
        {
            self::$animation = $value;
            return new static();
        }

        // Set icon animation as beat
        public static function beat()
        {
            return self::animation('beat');
        }

        // Set icon animation as beat-fade
        public static function beatfade()
        {
            return self::animation('beat-fade');
        }

        // Set icon animation as bounce
        public static function bounce()
        {
            return self::animation('bounce');
        }

        // Set icon type as brands
        public static function brands()
        {
            return self::type('brands');
        }

        // Set icon animation as fade
        public static function fade()
        {
            return self::animation('fade');
        }

        // Set icon animation as flip
        public static function flip()
        {
            return self::animation('flip');
        }

        // Set icon flip both horizontal & vertical
        public static function flipb()
        {
            self::$flip = 'flip-both';
            return new static();
        }

        // Set icon flip horizontal
        public static function fliph()
        {
            self::$flip = 'flip-horizontal';
            return new static();
        }

        // Set icon flip vertical
        public static function flipv()
        {
            self::$flip = 'flip-vertical';
            return new static();
        }

        // Returns html formatted Font Awesome icon
        public static function get($name)
        {
            // Declare return
            $x = null;

            // Set type
            if (!is_null(self::$type))
            {
                self::$type = 'fa-' . self::$type;
            }

            // Set icon name
            $name = 'fa-' . $name;

            // Set animation
            if (!is_null(self::$animation))
            {
                self::$animation = ' fa-' . self::$animation;
            }

            // Set flip
            if (!is_null(self::$flip))
            {
                self::$flip = ' fa-' . self::$flip;
            }

            // Set rotate
            if (!is_null(self::$rotate))
            {
                self::$rotate = ' fa-' . self::$rotate;
            }

            // Set size
            if (!is_null(self::$size))
            {
                self::$size = ' fa-' . self::$size;
            }

            // Check ID
            if (!is_null(self::$id))
            {
                self::$id = ' id="' . self::$id . '"';
            }

            // Create icon
            $x = '<i class="' . self::$type . ' ' . $name . self::$size . self::$animation . self::$rotate . self::$flip . '"' . self::$id . '></i>';
            
            // Reset values
            self::$animation = null;
            self::$flip = null;
            self::$id = null;
            self::$rotate = null;
            self::$size = null;
            self::$type = null;

            // Return icon
            return $x;
        }

        // Set id of icon element
        public static function id($value)
        {
            self::$id = $value;
            return new static();
        }

        // Set icon size to lg
        public static function lg()
        {
            return self::size('lg');
        }

        // Set icon type as regular
        public static function regular()
        {
            return self::type('regular');
        }

        // Set icon rotation - 90, 180, and 270
        public static function rotate($value)
        {
            self::$rotate = 'rotate-' . $value;
            return new static();
        }

        // Set icon animation as shake
        public static function shake()
        {
            return self::animation('shake');
        }

        //Set icon size - 2xs, xs, sm, lg, xl, 2xl
        public static function size($value)
        {
            self::$size = $value;
            return new static();
        }

        // Set icon size to sm
        public static function sm()
        {
            return self::size('sm');
        }

        // Set icon type as solid
        public static function solid()
        {
            return self::type('solid');
        }

        // Set icon animation as spin
        public static function spin()
        {
            return self::animation('spin');
        }

        // Set icon animation as spin-pulse
        public static function spinpulse()
        {
            return self::animation('spin-pulse');
        }

        // Set icon animation as spin-reverse
        public static function spinreverse()
        {
            return self::animation('spin-reverse fa-spin');
        }

        // Set icon type - brands, regular, or solid
        public static function type($value)
        {
            self::$type = $value;
            return new static();
        }

        // Set icon size to xl or 2xl
        public static function xl($double = null)
        {
            if (is_null($double))
            {
                return self::size('xl');
            } else {
                return self::size('2xl');
            }
        }

        // Set icon size to xs or 2xs
        public static function xs($double = null)
        {
            if (is_null($double))
            {
                return self::size('xs');
            } else {
                return self::size('2xs');
            }
        }


    }


}