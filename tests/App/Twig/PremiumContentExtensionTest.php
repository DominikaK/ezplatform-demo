<?php

namespace Tests\App\Twig;

use App\Helper\UserGroupHelper;
use App\PremiumContent\HtmlRenderer;
use App\Twig\PremiumContentExtension;
use PHPUnit\Framework\TestCase;

class PremiumContentExtensionTest extends TestCase
{
    public function testHasAccessToPremiumContent()
    {
        $userGroups = $this->createMock(UserGroupHelper::class);

        $userGroupsLocationIds = [24];

        $userGroups->expects($this->once())
            ->method('isCurrentUserInOneOfTheGroups')
            ->with($userGroupsLocationIds)
            ->will($this->returnValue(true));

        $subject = new PremiumContentExtension(
            $this->createMock(HtmlRenderer::class),
            $userGroups,
            $userGroupsLocationIds
        );

        $result = $subject->hasAccessToPremiumContent();

        $this->assertEquals(true, $result);
    }

    public function testHasAccessToPremiumContentWithWrongIds()
    {
        $userGroups = $this->createMock(UserGroupHelper::class);

        $userGroupsLocationIds = [36];

        $userGroups->expects($this->once())
            ->method('isCurrentUserInOneOfTheGroups')
            ->with($userGroupsLocationIds)
            ->will($this->returnValue(false));

        $subject = new PremiumContentExtension(
            $this->createMock(HtmlRenderer::class),
            $userGroups,
            $userGroupsLocationIds
        );

        $result = $subject->hasAccessToPremiumContent();

        $this->assertEquals(false, $result);
    }

    public function testPreviewPremiumContent()
    {
        $htmlRenderer = $this->createMock(HtmlRenderer::class);

        $htmlDocument = '<b>rendered text</b>';

        $htmlRenderer->expects($this->once())
            ->method('renderElements')
            ->with($htmlDocument, 5)
            ->will($this->returnValue($htmlDocument));

        $subject = new PremiumContentExtension(
            $htmlRenderer,
            $this->createMock(UserGroupHelper::class),
            []
        );

        $result = $subject->previewPremiumContent($htmlDocument, 5);

        $this->assertEquals($htmlDocument, $result);
    }
}
