# Trip Calculator

Trip Calculator - це консольний додаток на PHP, який дозволяє розраховувати вартість поїздки на різних транспортних засобах.

## Вимоги

- PHP 8.3 або новіше
- Composer

## Встановлення

1. Клонуйте репозиторій або завантажте його:
    ```sh
    git clone https://github.com/yourname/trip-calculator.git
    cd trip-calculator
    ```

2. Встановіть залежності через Composer:
    ```sh
    composer install
    ```

## Використання

1. Відредагуйте файл `calculate.php`, щоб вказати необхідні параметри для розрахунку:
    ```php
    <?php

    require 'vendor/autoload.php';

    use TripCalculator\TripCalculator;
    use TripCalculator\Vehicles\Bus;
    // використовуйте інші транспортні засоби, якщо необхідно

    $calculator = new TripCalculator();

    // Додаємо автобус
    $calculator->addVehicle(new Bus());
    // додайте інші транспортні засоби за потреби

    $passengers = 20;
    $luggageWeight = 100;
    $distance = 150;

    $results = $calculator->calculate($passengers, $luggageWeight, $distance);

    foreach ($results as $result) {
        echo $result['vehicle'] . ': ' . $result['cost'] . " грн\n";
    }
    ```

2. Запустіть скрипт у консолі:
    ```sh
    php calculate.php
    ```

## Тестування

1. Запустіть PHPUnit для виконання тестів:
    ```sh
    vendor/bin/phpunit
    ```

## Структура Проекту

- **src/**: Вихідний код проекту
    - **Vehicles/**: Класи транспортних засобів
    - **VehicleInterface.php**: Інтерфейс для транспортних засобів
    - **TripCalculator.php**: Клас для розрахунку вартості поїздки
- **tests/**: Тести проекту
    - **VehicleTest.php**: Тести для транспортних засобів
    - **TripCalculatorTest.php**: Тести для калькулятора поїздок
- **composer.json**: Файл конфігурації Composer
- **calculate.php**: Консольний скрипт для розрахунку вартості поїздки

## Приклад Доданих Транспортних Засобів

### Bus

```php
<?php

namespace TripCalculator\Vehicles;

class Bus implements VehicleInterface
{
    public function getName(): string
    {
        return 'Bus';
    }

    public function getPassengerCapacity(): int
    {
        return 32;
    }

    public function getMaxLuggageWeight(): int
    {
        return 300;
    }

    public function getFuelConsumptionPer100Km(): float
    {
        return 20;
    }

    public function getMaxTripDistance(): float
    {
        return 200;
    }

    public function getDepreciationCoefficient(): float
    {
        return 2;
    }

    public function getDriverCategoryCoefficient(): float
    {
        return 1.5;
    }

    public function getCostPerKm(): float
    {
        return 5;
    }
}
