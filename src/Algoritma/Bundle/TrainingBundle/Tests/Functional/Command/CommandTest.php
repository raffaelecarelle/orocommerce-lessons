<?php

namespace Algoritma\Bundle\TrainingBundle\Tests\Functional\Command;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class CommandTest extends WebTestCase
{
    public function testCommandRun(): void
    {
        $tester = new CommandTester(self::getContainer()->get('oro_order.command.order_drafts_cleanup'));

        $tester->execute([]);
        $tester->assertCommandIsSuccessful();
    }
}