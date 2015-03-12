<?php
/**
 * This file is part of the Fakerino package.
 *
 * (c) Nicola Pietroluongo <nik.longstone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fakerino\Test\Core\FakeHandler;

use Fakerino\Core\FakeHandler\DefaultFakerClass;

class DefaultFakerClassTest extends \PHPUnit_Framework_TestCase
{
    public function testHandler()
    {
        $handler = new DefaultFakerClass();
        $customClass = 'GenericString';

        $this->assertInstanceOf('Fakerino\Core\FakeHandler\Handler', $handler);
        $this->assertInternalType('string', $handler->handle($customClass));
    }
}
