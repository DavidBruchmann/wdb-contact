<?php

declare(strict_types=1);

namespace Wdb\WdbContact\Domain\Model;


/**
 * This file is part of the "Contact" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 David Bruchmann <david.bruchmann@gmail.com>, Webdevelopment Barlian
 */

/**
 * Person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * userName
     *
     * @var string
     */
    protected $userName = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * houseNumber
     *
     * @var string
     */
    protected $houseNumber = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * country
     *
     * @var string
     */
    protected $country = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * www
     *
     * @var string
     */
    protected $www = '';

    /**
     * telephone
     *
     * @var string
     */
    protected $telephone = '';

    /**
     * mobile
     *
     * @var string
     */
    protected $mobile = '';

    /**
     * skype
     *
     * @var string
     */
    protected $skype = '';

    /**
     * slack
     *
     * @var string
     */
    protected $slack = '';

    /**
     * whatsApp
     *
     * @var string
     */
    protected $whatsApp = '';

    /**
     * additionalText
     *
     * @var string
     */
    protected $additionalText = '';

    /**
     * kununu
     *
     * @var string
     */
    protected $kununu = '';

    /**
     * linkedin
     *
     * @var string
     */
    protected $linkedin = '';

    /**
     * xing
     *
     * @var string
     */
    protected $xing = '';

    /**
     * twitter
     *
     * @var string
     */
    protected $twitter = '';

    /**
     * facebook
     *
     * @var string
     */
    protected $facebook = '';

    /**
     * instagram
     *
     * @var string
     */
    protected $instagram = '';

    /**
     * github
     *
     * @var string
     */
    protected $github = '';

    /**
     * gitlab
     *
     * @var string
     */
    protected $gitlab = '';

    /**
     * bitbucket
     *
     * @var string
     */
    protected $bitbucket = '';

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the userName
     *
     * @return string $userName
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets the userName
     *
     * @param string $userName
     * @return void
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * Returns the houseNumber
     *
     * @return string $houseNumber
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets the houseNumber
     *
     * @param string $houseNumber
     * @return void
     */
    public function setHouseNumber(string $houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the www
     *
     * @return string $www
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * Sets the www
     *
     * @param string $www
     * @return void
     */
    public function setWww(string $www)
    {
        $this->www = $www;
    }

    /**
     * Returns the telephone
     *
     * @return string $telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets the telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Returns the mobile
     *
     * @return string $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets the mobile
     *
     * @param string $mobile
     * @return void
     */
    public function setMobile(string $mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * Returns the skype
     *
     * @return string $skype
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Sets the skype
     *
     * @param string $skype
     * @return void
     */
    public function setSkype(string $skype)
    {
        $this->skype = $skype;
    }

    /**
     * Returns the slack
     *
     * @return string $slack
     */
    public function getSlack()
    {
        return $this->slack;
    }

    /**
     * Sets the slack
     *
     * @param string $slack
     * @return void
     */
    public function setSlack(string $slack)
    {
        $this->slack = $slack;
    }

    /**
     * Returns the whatsApp
     *
     * @return string $whatsApp
     */
    public function getWhatsApp()
    {
        return $this->whatsApp;
    }

    /**
     * Sets the whatsApp
     *
     * @param string $whatsApp
     * @return void
     */
    public function setWhatsApp(string $whatsApp)
    {
        $this->whatsApp = $whatsApp;
    }

    /**
     * Returns the additionalText
     *
     * @return string $additionalText
     */
    public function getAdditionalText()
    {
        return $this->additionalText;
    }

    /**
     * Sets the additionalText
     *
     * @param string $additionalText
     * @return void
     */
    public function setAdditionalText(string $additionalText)
    {
        $this->additionalText = $additionalText;
    }

    /**
     * Returns the kununu
     *
     * @return string $kununu
     */
    public function getKununu()
    {
        return $this->kununu;
    }

    /**
     * Sets the kununu
     *
     * @param string $kununu
     * @return void
     */
    public function setKununu(string $kununu)
    {
        $this->kununu = $kununu;
    }

    /**
     * Returns the linkedin
     *
     * @return string $linkedin
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Sets the linkedin
     *
     * @param string $linkedin
     * @return void
     */
    public function setLinkedin(string $linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * Returns the xing
     *
     * @return string $xing
     */
    public function getXing()
    {
        return $this->xing;
    }

    /**
     * Sets the xing
     *
     * @param string $xing
     * @return void
     */
    public function setXing(string $xing)
    {
        $this->xing = $xing;
    }

    /**
     * Returns the twitter
     *
     * @return string $twitter
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Sets the twitter
     *
     * @param string $twitter
     * @return void
     */
    public function setTwitter(string $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Returns the facebook
     *
     * @return string $facebook
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Sets the facebook
     *
     * @param string $facebook
     * @return void
     */
    public function setFacebook(string $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Returns the instagram
     *
     * @return string $instagram
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Sets the instagram
     *
     * @param string $instagram
     * @return void
     */
    public function setInstagram(string $instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * Returns the github
     *
     * @return string $github
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Sets the github
     *
     * @param string $github
     * @return void
     */
    public function setGithub(string $github)
    {
        $this->github = $github;
    }

    /**
     * Returns the gitlab
     *
     * @return string $gitlab
     */
    public function getGitlab()
    {
        return $this->gitlab;
    }

    /**
     * Sets the gitlab
     *
     * @param string $gitlab
     * @return void
     */
    public function setGitlab(string $gitlab)
    {
        $this->gitlab = $gitlab;
    }

    /**
     * Returns the bitbucket
     *
     * @return string $bitbucket
     */
    public function getBitbucket()
    {
        return $this->bitbucket;
    }

    /**
     * Sets the bitbucket
     *
     * @param string $bitbucket
     * @return void
     */
    public function setBitbucket(string $bitbucket)
    {
        $this->bitbucket = $bitbucket;
    }
}
