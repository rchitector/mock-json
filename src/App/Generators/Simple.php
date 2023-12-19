<?php

namespace Rchitector\MockJson\App\Generators;

use Faker\Factory;

/**
 * @method \Rchitector\MockJson\App\Generators\Simple\Address address()
 * @method \Rchitector\MockJson\App\Generators\Simple\AmPm amPm()
 * @method \Rchitector\MockJson\App\Generators\Simple\Asciify asciify()
 * @method \Rchitector\MockJson\App\Generators\Simple\BiasedNumberBetween biasedNumberBetween()
 * @method \Rchitector\MockJson\App\Generators\Simple\Boolean boolean()
 * @method \Rchitector\MockJson\App\Generators\Simple\Bothify bothify()
 * @method \Rchitector\MockJson\App\Generators\Simple\BuildingNumber buildingNumber()
 * @method \Rchitector\MockJson\App\Generators\Simple\Century century()
 * @method \Rchitector\MockJson\App\Generators\Simple\Chrome chrome()
 * @method \Rchitector\MockJson\App\Generators\Simple\City city()
 * @method \Rchitector\MockJson\App\Generators\Simple\CitySuffix citySuffix()
 * @method \Rchitector\MockJson\App\Generators\Simple\ColorName colorName()
 * @method \Rchitector\MockJson\App\Generators\Simple\Company company()
 * @method \Rchitector\MockJson\App\Generators\Simple\CompanyEmail companyEmail()
 * @method \Rchitector\MockJson\App\Generators\Simple\CompanySuffix companySuffix()
 * @method \Rchitector\MockJson\App\Generators\Simple\Country country()
 * @method \Rchitector\MockJson\App\Generators\Simple\CountryCode countryCode()
 * @method \Rchitector\MockJson\App\Generators\Simple\CountryISOAlpha3 countryISOAlpha3()
 * @method \Rchitector\MockJson\App\Generators\Simple\CreditCardDetails creditCardDetails()
 * @method \Rchitector\MockJson\App\Generators\Simple\CreditCardExpirationDate creditCardExpirationDate()
 * @method \Rchitector\MockJson\App\Generators\Simple\CreditCardExpirationDateString creditCardExpirationDateString()
 * @method \Rchitector\MockJson\App\Generators\Simple\CreditCardNumber creditCardNumber()
 * @method \Rchitector\MockJson\App\Generators\Simple\CreditCardType creditCardType()
 * @method \Rchitector\MockJson\App\Generators\Simple\CurrencyCode currencyCode()
 * @method \Rchitector\MockJson\App\Generators\Simple\Date date()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTime dateTime()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeAD dateTimeAD()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeBetween dateTimeBetween()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeInInterval dateTimeInInterval()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeThisCentury dateTimeThisCentury()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeThisDecade dateTimeThisDecade()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeThisMonth dateTimeThisMonth()
 * @method \Rchitector\MockJson\App\Generators\Simple\DateTimeThisYear dateTimeThisYear()
 * @method \Rchitector\MockJson\App\Generators\Simple\DayOfMonth dayOfMonth()
 * @method \Rchitector\MockJson\App\Generators\Simple\DayOfWeek dayOfWeek()
 * @method \Rchitector\MockJson\App\Generators\Simple\DomainName domainName()
 * @method \Rchitector\MockJson\App\Generators\Simple\DomainWord domainWord()
 * @method \Rchitector\MockJson\App\Generators\Simple\E164PhoneNumber e164PhoneNumber()
 * @method \Rchitector\MockJson\App\Generators\Simple\Email email()
 * @method \Rchitector\MockJson\App\Generators\Simple\Emoji emoji()
 * @method \Rchitector\MockJson\App\Generators\Simple\File file()
 * @method \Rchitector\MockJson\App\Generators\Simple\Firefox firefox()
 * @method \Rchitector\MockJson\App\Generators\Simple\FirstName firstName()
 * @method \Rchitector\MockJson\App\Generators\Simple\FirstNameFemale firstNameFemale()
 * @method \Rchitector\MockJson\App\Generators\Simple\FirstNameMale firstNameMale()
 * @method \Rchitector\MockJson\App\Generators\Simple\FreeEmail freeEmail()
 * @method \Rchitector\MockJson\App\Generators\Simple\FreeEmailDomain freeEmailDomain()
 * @method \Rchitector\MockJson\App\Generators\Simple\GetDefaultTimezone getDefaultTimezone()
 * @method \Rchitector\MockJson\App\Generators\Simple\HexColor hexColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\HslColor hslColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\HslColorAsArray hslColorAsArray()
 * @method \Rchitector\MockJson\App\Generators\Simple\Iban iban()
 * @method \Rchitector\MockJson\App\Generators\Simple\Image image()
 * @method \Rchitector\MockJson\App\Generators\Simple\ImageUrl imageUrl()
 * @method \Rchitector\MockJson\App\Generators\Simple\Imei imei()
 * @method \Rchitector\MockJson\App\Generators\Simple\InternetExplorer internetExplorer()
 * @method \Rchitector\MockJson\App\Generators\Simple\IosMobileToken iosMobileToken()
 * @method \Rchitector\MockJson\App\Generators\Simple\Ipv4 ipv4()
 * @method \Rchitector\MockJson\App\Generators\Simple\Ipv6 ipv6()
 * @method \Rchitector\MockJson\App\Generators\Simple\Iso8601 iso8601()
 * @method \Rchitector\MockJson\App\Generators\Simple\JobTitle jobTitle()
 * @method \Rchitector\MockJson\App\Generators\Simple\LanguageCode languageCode()
 * @method \Rchitector\MockJson\App\Generators\Simple\LastName lastName()
 * @method \Rchitector\MockJson\App\Generators\Simple\Latitude latitude()
 * @method \Rchitector\MockJson\App\Generators\Simple\Lexify lexify()
 * @method \Rchitector\MockJson\App\Generators\Simple\LinuxPlatformToken linuxPlatformToken()
 * @method \Rchitector\MockJson\App\Generators\Simple\LinuxProcessor linuxProcessor()
 * @method \Rchitector\MockJson\App\Generators\Simple\LocalCoordinates localCoordinates()
 * @method \Rchitector\MockJson\App\Generators\Simple\LocalIpv4 localIpv4()
 * @method \Rchitector\MockJson\App\Generators\Simple\Locale locale()
 * @method \Rchitector\MockJson\App\Generators\Simple\Longitude longitude()
 * @method \Rchitector\MockJson\App\Generators\Simple\MacAddress macAddress()
 * @method \Rchitector\MockJson\App\Generators\Simple\MacPlatformToken macPlatformToken()
 * @method \Rchitector\MockJson\App\Generators\Simple\MacProcessor macProcessor()
 * @method \Rchitector\MockJson\App\Generators\Simple\Md5 md5()
 * @method \Rchitector\MockJson\App\Generators\Simple\Month month()
 * @method \Rchitector\MockJson\App\Generators\Simple\MonthName monthName()
 * @method \Rchitector\MockJson\App\Generators\Simple\Msedge msedge()
 * @method \Rchitector\MockJson\App\Generators\Simple\Name name()
 * @method \Rchitector\MockJson\App\Generators\Simple\Numerify numerify()
 * @method \Rchitector\MockJson\App\Generators\Simple\Opera opera()
 * @method \Rchitector\MockJson\App\Generators\Simple\Paragraph paragraph()
 * @method \Rchitector\MockJson\App\Generators\Simple\Paragraphs paragraphs()
 * @method \Rchitector\MockJson\App\Generators\Simple\Passthrough passthrough()
 * @method \Rchitector\MockJson\App\Generators\Simple\Password password()
 * @method \Rchitector\MockJson\App\Generators\Simple\PhoneNumber phoneNumber()
 * @method \Rchitector\MockJson\App\Generators\Simple\Postcode postcode()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomAscii randomAscii()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomDigitNotNull randomDigitNotNull()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomElement randomElement()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomElements randomElements()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomHtml randomHtml()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomKey randomKey()
 * @method \Rchitector\MockJson\App\Generators\Simple\RandomLetter randomLetter()
 * @method \Rchitector\MockJson\App\Generators\Simple\RealText realText()
 * @method \Rchitector\MockJson\App\Generators\Simple\RealTextBetween realTextBetween()
 * @method \Rchitector\MockJson\App\Generators\Simple\Regexify regexify()
 * @method \Rchitector\MockJson\App\Generators\Simple\RgbColor rgbColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\RgbColorAsArray rgbColorAsArray()
 * @method \Rchitector\MockJson\App\Generators\Simple\RgbCssColor rgbCssColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\RgbaCssColor rgbaCssColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\Safari safari()
 * @method \Rchitector\MockJson\App\Generators\Simple\SafeColorName safeColorName()
 * @method \Rchitector\MockJson\App\Generators\Simple\SafeEmail safeEmail()
 * @method \Rchitector\MockJson\App\Generators\Simple\SafeEmailDomain safeEmailDomain()
 * @method \Rchitector\MockJson\App\Generators\Simple\SafeHexColor safeHexColor()
 * @method \Rchitector\MockJson\App\Generators\Simple\Sentence sentence()
 * @method \Rchitector\MockJson\App\Generators\Simple\Sentences sentences()
 * @method \Rchitector\MockJson\App\Generators\Simple\Sha1 sha1()
 * @method \Rchitector\MockJson\App\Generators\Simple\Sha256 sha256()
 * @method \Rchitector\MockJson\App\Generators\Simple\Shuffle shuffle()
 * @method \Rchitector\MockJson\App\Generators\Simple\ShuffleArray shuffleArray()
 * @method \Rchitector\MockJson\App\Generators\Simple\ShuffleString shuffleString()
 * @method \Rchitector\MockJson\App\Generators\Simple\Slug slug()
 * @method \Rchitector\MockJson\App\Generators\Simple\StreetAddress streetAddress()
 * @method \Rchitector\MockJson\App\Generators\Simple\StreetName streetName()
 * @method \Rchitector\MockJson\App\Generators\Simple\StreetSuffix streetSuffix()
 * @method \Rchitector\MockJson\App\Generators\Simple\SwiftBicNumber swiftBicNumber()
 * @method \Rchitector\MockJson\App\Generators\Simple\Text text()
 * @method \Rchitector\MockJson\App\Generators\Simple\Time time()
 * @method \Rchitector\MockJson\App\Generators\Simple\Timezone timezone()
 * @method \Rchitector\MockJson\App\Generators\Simple\Title title()
 * @method \Rchitector\MockJson\App\Generators\Simple\TitleFemale titleFemale()
 * @method \Rchitector\MockJson\App\Generators\Simple\TitleMale titleMale()
 * @method \Rchitector\MockJson\App\Generators\Simple\Tld tld()
 * @method \Rchitector\MockJson\App\Generators\Simple\ToLower toLower()
 * @method \Rchitector\MockJson\App\Generators\Simple\ToUpper toUpper()
 * @method \Rchitector\MockJson\App\Generators\Simple\UnixTime unixTime()
 * @method \Rchitector\MockJson\App\Generators\Simple\Url url()
 * @method \Rchitector\MockJson\App\Generators\Simple\UserAgent userAgent()
 * @method \Rchitector\MockJson\App\Generators\Simple\UserName userName()
 * @method \Rchitector\MockJson\App\Generators\Simple\Uuid uuid()
 * @method \Rchitector\MockJson\App\Generators\Simple\WindowsPlatformToken windowsPlatformToken()
 * @method \Rchitector\MockJson\App\Generators\Simple\Word word()
 * @method \Rchitector\MockJson\App\Generators\Simple\Words words()
 * @method \Rchitector\MockJson\App\Generators\Simple\Year year()
 */
class Simple
{
    public static function one(string $locale = \Faker\Factory::DEFAULT_LOCALE): Simple
    {
        return new self(count: -1, locale: $locale);
    }

    public static function many(int $count = 0, string $locale = \Faker\Factory::DEFAULT_LOCALE): Simple
    {
        return new self(count: $count > -1 ? $count : 0, locale: $locale);
    }

    private function __construct(
        private readonly int $count = -1,
        private string $locale = \Faker\Factory::DEFAULT_LOCALE
    )
    {
        if (!in_array($locale, Miscellaneous::locales())) {
            $this->locale = \Faker\Factory::DEFAULT_LOCALE;
        }
    }

    public function __call(string $name, array $arguments)
    {
        $className = __NAMESPACE__.'\\Simple\\'.ucfirst($name);
        return (new $className($this->locale, $this->count))->$name(...$arguments);
    }
}