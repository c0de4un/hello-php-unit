<?php

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\Warning;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestSuite;

final class MyTestListener implements TestListener
{
    public function addError(Test $test, Throwable $t, float $time): void
    {
        printf("Ошибка во время выполнения теста '%s'.\n", $test->getName());
    }

    public function addWarning(Test $test, Warning $e, float $time): void
    {
        printf("Предупреждение во время выполнения теста '%s'.\n", $test->getName());
    }

    public function addFailure(Test $test, AssertionFailedError $e, float $time): void
    {
        printf("Тест '%s' провалился.\n", $test->getName());
    }

    public function addIncompleteTest(Test $test, Throwable $t, float $time): void
    {
        printf("Тест '%s' является неполным.\n", $test->getName());
    }

    public function addRiskyTest(Test $test, Throwable $t, float $time): void
    {
        printf("Тест '%s' считается рискованным.\n", $test->getName());
    }

    public function addSkippedTest(Test $test, Throwable $t, float $time): void
    {
        printf("Тест '%s' был пропущен.\n", $test->getName());
    }

    public function startTest(Test $test): void
    {
        printf("Тест '%s' запустился.\n", $test->getName());
    }

    public function endTest(Test $test, float $time): void
    {
        printf("Тест '%s' завершился.\n", $test->getName());
    }

    public function startTestSuite(TestSuite $suite): void
    {
        printf("Набор тестов '%s' запустился.\n", $suite->getName());
    }

    public function endTestSuite(TestSuite $suite): void
    {
        printf("Набор тестов '%s' завершился.\n", $suite->getName());
    }
};
