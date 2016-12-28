<?php

/**
 * File: ArraySetTest.php
 *
 * @author Nicolas Dubois <ndubois@amg-dev.fr>
 * @version SVN: $Id$
 * @copyright © 2011 GPdis - AMG Développement
 */

define('_SRC_ROOT', dirname(dirname(dirname(__FILE__))) . '/src');

require_once(_SRC_ROOT . '/Set.php');
require_once(_SRC_ROOT . '/Set/Array.php');
require_once(_SRC_ROOT . '/Set/Exception.php');

class Set_ArrayTest extends PHPUnit_Framework_TestCase
{
    private $instance = null;

    public function setUp()
    {
        $this->instance = new SetArray();
    }

    public function testInstance()
    {
        $this->assertTrue($this->instance instanceof SetArray, 'SetArray doit être une instance de SetArray');
        $this->assertTrue($this->instance instanceof Set, 'SetArray doit être une instance de Set');
    }

    public function testEmpty()
    {
        $this->assertTrue($this->instance->isEmpty(), 'Le set doit être vide');
    }

    public function testAdd()
    {
        $this->instance->add(2);
        $this->assertFalse($this->instance->isEmpty(), 'Le set ne doit pas être vide');
        $this->assertEquals(1, $this->instance->getSize(), 'Le nombre d\'élément dans le set doit être égale à 1');

        $this->instance->add(3);
        $this->assertFalse($this->instance->isEmpty(), 'Le set ne doit pas être vide');
        $this->assertEquals(2, $this->instance->getSize(), 'Le nombre d\'élément dans le set doit être égale à 2');

        $this->instance->add(3);
        $this->assertFalse($this->instance->isEmpty(), 'Le set ne doit pas être vide');
        $this->assertEquals(2, $this->instance->getSize(), 'Le nombre d\'élément dans le set doit être égale à 2');
    }

    public function testRemove()
    {
        // Add 2, then 3:
        $this->instance->add(2)->add(3);
        $this->assertFalse($this->instance->isEmpty(), 'Le set ne doit pas être vide');
        $this->assertEquals(2, $this->instance->getSize(), 'Le nombre d\'élément dans le set doit être égale à 2');

        // Remove 3, so far, everything's fine:
        $this->instance->remove(3);
        $this->assertFalse($this->instance->isEmpty(), 'Le set ne doit pas être vide');
        $this->assertEquals(1, $this->instance->getSize(), 'Le nombre d\'élément dans le set doit être égale à 1');

        try {
            // Removing 100 (not in the set), should throw an exception:
            $this->instance->remove(100);
            $this->fail('Une exception aurait dû être lancée');
        } catch(Set_Exception $exception) {
            $this->assertTrue(true);
        }
    }


}
