<?php
declare(strict_types=1);

namespace Wdb\WdbContact\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author David Bruchmann <david.bruchmann@gmail.com>
 */
class PersonTest extends UnitTestCase
{
    /**
     * @var \Wdb\WdbContact\Domain\Model\Person
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Wdb\WdbContact\Domain\Model\Person();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUserName()
        );
    }

    /**
     * @test
     */
    public function setUserNameForStringSetsUserName()
    {
        $this->subject->setUserName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'userName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHouseNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHouseNumber()
        );
    }

    /**
     * @test
     */
    public function setHouseNumberForStringSetsHouseNumber()
    {
        $this->subject->setHouseNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'houseNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );
    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWwwReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWww()
        );
    }

    /**
     * @test
     */
    public function setWwwForStringSetsWww()
    {
        $this->subject->setWww('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'www',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelephoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTelephone()
        );
    }

    /**
     * @test
     */
    public function setTelephoneForStringSetsTelephone()
    {
        $this->subject->setTelephone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'telephone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMobileReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMobile()
        );
    }

    /**
     * @test
     */
    public function setMobileForStringSetsMobile()
    {
        $this->subject->setMobile('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mobile',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSkype()
        );
    }

    /**
     * @test
     */
    public function setSkypeForStringSetsSkype()
    {
        $this->subject->setSkype('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'skype',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSlackReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSlack()
        );
    }

    /**
     * @test
     */
    public function setSlackForStringSetsSlack()
    {
        $this->subject->setSlack('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'slack',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWhatsAppReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWhatsApp()
        );
    }

    /**
     * @test
     */
    public function setWhatsAppForStringSetsWhatsApp()
    {
        $this->subject->setWhatsApp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'whatsApp',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdditionalTextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdditionalText()
        );
    }

    /**
     * @test
     */
    public function setAdditionalTextForStringSetsAdditionalText()
    {
        $this->subject->setAdditionalText('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'additionalText',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKununuReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKununu()
        );
    }

    /**
     * @test
     */
    public function setKununuForStringSetsKununu()
    {
        $this->subject->setKununu('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kununu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkedinReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLinkedin()
        );
    }

    /**
     * @test
     */
    public function setLinkedinForStringSetsLinkedin()
    {
        $this->subject->setLinkedin('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'linkedin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getXingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getXing()
        );
    }

    /**
     * @test
     */
    public function setXingForStringSetsXing()
    {
        $this->subject->setXing('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'xing',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTwitterReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTwitter()
        );
    }

    /**
     * @test
     */
    public function setTwitterForStringSetsTwitter()
    {
        $this->subject->setTwitter('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'twitter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFacebookReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFacebook()
        );
    }

    /**
     * @test
     */
    public function setFacebookForStringSetsFacebook()
    {
        $this->subject->setFacebook('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'facebook',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getInstagramReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInstagram()
        );
    }

    /**
     * @test
     */
    public function setInstagramForStringSetsInstagram()
    {
        $this->subject->setInstagram('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'instagram',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGithubReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGithub()
        );
    }

    /**
     * @test
     */
    public function setGithubForStringSetsGithub()
    {
        $this->subject->setGithub('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'github',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGitlabReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGitlab()
        );
    }

    /**
     * @test
     */
    public function setGitlabForStringSetsGitlab()
    {
        $this->subject->setGitlab('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gitlab',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBitbucketReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBitbucket()
        );
    }

    /**
     * @test
     */
    public function setBitbucketForStringSetsBitbucket()
    {
        $this->subject->setBitbucket('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bitbucket',
            $this->subject
        );
    }
}
