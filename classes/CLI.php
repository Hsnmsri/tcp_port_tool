<?php

namespace App;

class CLI
{

    /**
     * Clears the terminal screen.
     *
     * This function is used to clear the contents of the terminal or command line screen,
     * providing a clean slate for displaying new content.
     */
    public static function clear()
    {
        print(chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J');
    }

    /**
     * Prints an error message in red text.
     *
     * This function is used to display error messages in red color on the command line or terminal.
     *
     * @param string $text The error message to be displayed.
     */
    public static function print_error($text)
    {
        print("\033[0;31m" . $text . "\033[0m\n");
    }

    /**
     * Prints a success message in green text.
     *
     * This function is used to display success messages in green color on the command line or terminal.
     *
     * @param string $text The success message to be displayed.
     */
    public static function print_success($text)
    {
        print("\033[0;32m" . $text . "\033[0m\n");
    }
}