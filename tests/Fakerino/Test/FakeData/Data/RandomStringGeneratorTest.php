<?php
/**
 * This file is part of the Fakerino package.
 *
 * (c) Nicola Pietroluongo <nik.longstone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fakerino\Test\FakeData\Data;

use Fakerino\FakeData\Data\RandomStringGenerator;
use Fakerino\FakeData\Data\GenericString;

class RandomStringGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->randomStringGenerator = new RandomStringGenerator(new GenericString());
    }

    public function testRandomStringGeneratorConstructor()
    {
        $this->assertInstanceOf('Fakerino\FakeData\FakeDataGeneratorInterface', $this->randomStringGenerator);
    }
    public function testGenerate()
    {
        $randomString = $this->randomStringGenerator->generate();

        $this->assertNotNull($randomString);
        $this->assertInternalType('string', $randomString);
    }
}
