<?php
// src/DBAL/Types/EnumType.php
namespace App\DBAL\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class EnumType extends Type
{
    const ENUM = 'enum'; // Définir un type de base personnalisé

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // Conversion de la valeur de la base de données à la valeur PHP
        return (string) $value;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // Définir la déclaration SQL pour ce type personnalisé
        return "ENUM('user', 'moderator', 'admin')";
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        // Conversion de la valeur PHP à la valeur pour la base de données
        return (string) $value;
    }

    public function getName()
    {
        return self::ENUM;
    }
}