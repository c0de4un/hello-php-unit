<?php

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    // setUp, tearDown - фикстуры для организации/подготовки среды тестов
	protected function setUp(): void
	{
		// Подключение к БД
		// Загрузка Моделей
	}

	protected function tearDown(): void
	{
		// Откат транзакций SQL
		// Удаление файлов
		// Закрытие потоков
	}

    // Каждый test - unit/шаг, у которого своя среда выполнения

	/**
	 * Case #1: Аллоцирование коллекции
	 * @test
	 * @return array
	*/
	public function test_allocate(): array
	{
		// Аллоцируем коллекцию
        $stack = array();

		// Коллекция должна быть пустой
        $this->assertSame( 0, count($stack) );

		return $stack;
	}

	/**
	 * @test
	 * @depends test_allocate
	*/
    public function test_PushAndPop( array $stack ): void
    {
		//  Последний элемент должен совпадать
        array_push($stack, 'foo');
        $this->assertSame( 'foo', $stack[count($stack)-1] );
        $this->assertSame( 1, count($stack) );

		// Извелченный объект должен совпадать с целевым
        $this->assertSame( 'foo', array_pop($stack) );
        $this->assertSame( 0, count($stack) );
    }
};
