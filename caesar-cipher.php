<?php
/* 
	========================================================
	Taken from https://github.com/kkiernan/caesar-cipher-php
	========================================================

MIT License

Copyright (c) 2016 Kelly Kiernan

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

namespace KKiernan;

class CaesarCipher
{
    /**
     * Encrypts a plaintext using the Caesar Cipher.
     *
     * @param string $plaintext
     * @param int    $key
     *
     * @return string
     */
    public function encrypt($plaintext, $key = 12)
    {
        return $this->run($plaintext, $key);
    }

    /**
     * Decrypts a Caesar Cipher encrypted ciphertext.
     *
     * @param string $ciphertext
     * @param int    $key
     *
     * @return string
     */
    public function decrypt($ciphertext, $key = -12)
    {
        return $this->run($ciphertext, -$key);
    }

    /**
     * Attempts to brute force the key. This is using an extremely simplified
     * version of frequency analysis. We are just looking for the most
     * frequently used character and assuming it is the letter e.
     *
     * @param string $ciphertext
     *
     * @return int
     */
    public function crack($ciphertext)
    {
        $plaintexts = [];

        foreach (range(0, 25) as $key) {
            $plaintexts[$key] = substr_count(strtolower($this->decrypt($ciphertext, $key)), 'e');
        }

        return array_search(max($plaintexts), $plaintexts);
    }

    /**
     * Runs the algorithm to encrypt or decrypt the given string.
     *
     * @return void
     */
    protected function run($string, $key)
    {
        return implode(array_map(function ($char) use ($key) {
            return $this->shift($char, $key);
        }, str_split($string)), '');
    }

    /**
     * Handles requests to shift a character by the given number of places.
     *
     * @param string $char
     * @param int    $shift
     *
     * @return string
     */
    protected function shift($char, $shift)
    {
        $shift = $shift % 25;
        $ascii = ord($char);
        $shifted = $ascii + $shift;

        if ($ascii >= 65 && $ascii <= 90) {
            return chr($this->wrapUppercase($shifted));
        }

        if ($ascii >= 97 && $ascii <= 122) {
            return chr($this->wrapLowercase($shifted));
        }

        return chr($ascii);
    }

    /**
     * Ensures uppercase characters outside the range of A-Z are wrapped to
     * the start or end of the alphabet as needed.
     *
     * @param int $ascii
     *
     * @return int
     */
    protected function wrapUppercase($ascii)
    {
        // Handle character code that is less than A.
        if ($ascii < 65) {
            $ascii = 91 - (65 - $ascii);
        }

        // Handle character code that is greater than Z.
        if ($ascii > 90) {
            $ascii = ($ascii - 90) + 64;
        }

        // Return unchanged character code.
        return $ascii;
    }

    /**
     * Ensures lowercase characters outside the range of a-z are wrapped to
     * the start or end of the alphabet as needed.
     *
     * @param int $ascii
     *
     * @return int
     */
    function wrapLowercase($ascii)
    {
        // Handle character code that is less than a.
        if ($ascii < 97) {
            $ascii = 123 - (97 - $ascii);
        }

        // Handle character code that is greater than z.
        if ($ascii > 122) {
            $ascii = ($ascii - 122) + 96;
        }

        // Return unchanged character code.
        return $ascii;
    }
}
?>
