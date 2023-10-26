<?php 

/*
|----------------------------------------
|   tag - Trait for html tag elements   |
|----------------------------------------
|
|   Functions:
|
|       aria()          - Set aria-* to html tag
|       attribute()     - Set given attribute to html tag
|       class()         - Add class to html tag
|       getAttributes() - Returns formatted attributes
|       href()          - Set href to html tag
|       id()            - Set id to html tag
|       src()           - Set src to html tag
|       tag()           - Return given html tag & content
|
*/


namespace splittlogic\fw\Traits;

trait tag 
{


    // Variables
    protected static $attributes = array();


    // Set aria-* to html tag
    public static function aria($name = null, $value = null)
    {

        // Check name
        if (!is_null($name))
        {
            self::attribute('aria-' . $name, $value);
        }

        return new static();

    }


    // Set given attribute to html tag
    public static function attribute($name, $value = null)
    {

        self::$attributes[$name][] = $value;
        return new static();

    }


    // Add class to html tag
    public static function class($value = null)
    {

        // Check value
        if (!is_null($value))
        {
            self::attribute('class', $value);
        }

        return new static();

    }


    // Returns formatted attributes
    public static function getAttributes()
    {

        // Declare attributes string
        $attributes = null;

        // Check for attributes
        if (!empty(self::$attributes))
        {

            // Cycle through attributes
            foreach (self::$attributes as $attribute => $values)
            {
                // Check for value
                if (is_null($values[0]))
                {
                    $attributes .= ' ' . $attribute;
                } else {

                    // Set values count
                    $count = count($values);

                    // Set counter
                    $counter = 1;
                    
                    // Start attribute
                    $attributes .= ' ' . $attribute . '="';

                    // Cycle through values
                    foreach ($values as $value)
                    {

                        $attributes .= $value;

                        // Check if last value
                        if ($counter < $count)
                        {
                            $attributes .= ' ';
                        }

                        $counter++;

                    }

                    // Close attribute quotes
                    $attributes .= '"';

                }
            }
        }

        // Reset variables
        self::$attributes = array();

        return $attributes;

    }


    // Set href to html tag
    public static function href($value = null)
    {

        // Check value
        if (!is_null($value))
        {
            self::attribute('href', $value);
        }

        return new static();

    }


    // Set id to html tag
    public static function id($value = null)
    {

        // Check value
        if (!is_null($value))
        {
            self::attribute('id', $value);
        }

        return new static();

    }


    // Set src to html tag
    public static function src($value = null)
    {

        // Check value
        if (!is_null($value))
        {
            self::attribute('src', $value);
        }

        return new static();

    }


    // Return given html tag & content
    public static function tag($tag, $content = null)
    {

        // Declare return
        $x = null;

        // Declare attributes
        $attributes = null;

        // Get attributes
        $attributes = self::getAttributes();

        // Open html tag
        $x .= '<' . $tag . $attributes . '>';

        // Add content
        if (is_array($content))
        {

            // Cycle through content array
            foreach ($content as $c)
            {
                $x .= $c;
            }
            
        } else {

            $x .= $content;

        }
        
        // Close html tag
        $x .= '</' . $tag . '>';

        // Reset variables
        //self::$attributes = array();

        return $x;

    }


}