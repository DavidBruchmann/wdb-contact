<?php
declare(strict_types=1);

namespace Wdb\WdbContact\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author David Bruchmann <david.bruchmann@gmail.com>
 */
class OrganizationControllerTest extends UnitTestCase
{
    /**
     * @var \Wdb\WdbContact\Controller\OrganizationController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Wdb\WdbContact\Controller\OrganizationController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOrganizationsFromRepositoryAndAssignsThemToView()
    {
        $allOrganizations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $organizationRepository = $this->getMockBuilder(\Wdb\WdbContact\Domain\Repository\OrganizationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $organizationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrganizations));
        $this->inject($this->subject, 'organizationRepository', $organizationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('organizations', $allOrganizations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrganizationToView()
    {
        $organization = new \Wdb\WdbContact\Domain\Model\Organization();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('organization', $organization);

        $this->subject->showAction($organization);
    }
}
