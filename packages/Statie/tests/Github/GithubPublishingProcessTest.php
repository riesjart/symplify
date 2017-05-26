<?php declare(strict_types=1);

namespace Symplify\Statie\Tests\Github;

use Nette\Utils\FileSystem;
use PHPUnit\Framework\TestCase;
use Symplify\Statie\Github\GihubPublishingProcess;
use Throwable;

final class GithubPublishingProcessTest extends TestCase
{
    /**
     * @var string
     */
    private $outputDirectory = __DIR__ . DIRECTORY_SEPARATOR . 'GithubPublishingProcessSource';

    /**
     * @var GihubPublishingProcess
     */
    private $githubPublishingProcess;

    protected function setUp(): void
    {
        $this->githubPublishingProcess = new GihubPublishingProcess;
    }

    protected function tearDown(): void
    {
        FileSystem::delete($this->outputDirectory . DIRECTORY_SEPARATOR . '.git');
    }

    public function testPushDirectoryContentToRepositoryForNonExistingRepository(): void
    {
        $this->expectException(Throwable::class);
        $this->githubPublishingProcess->pushDirectoryContentToRepository('missing directory', '', '');
    }
}
