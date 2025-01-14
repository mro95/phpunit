<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\TestCase;

#[CoversClass(Exception::class)]
#[Small]
final class ExceptionTest extends TestCase
{
    public function testExceptionCanBeExportedAsString(): void
    {
        $exception = new Exception(Exception::class);

        $this->assertSame('exception of type "' . Exception::class . '"', $exception->toString());
    }
}
