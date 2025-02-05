<?php

declare(strict_types=1);

namespace Symplify\RuleDocGenerator\RuleCodeSamplePrinter;

use Symplify\RuleDocGenerator\Contract\CodeSampleInterface;
use Symplify\RuleDocGenerator\Contract\RuleCodeSamplePrinterInterface;
use Symplify\RuleDocGenerator\Printer\CodeSamplePrinter\DiffCodeSamplePrinter;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class PHPCSFixerRuleCodeSamplePrinter implements RuleCodeSamplePrinterInterface
{
    public function __construct(
        private DiffCodeSamplePrinter $diffCodeSamplePrinter,
        private ConfiguredCodeSamplerPrinter $configuredCodeSamplerPrinter
    ) {
    }

    public function isMatch(string $class): bool
    {
        /** @noRector */
        return is_a($class, 'PhpCsFixer\Fixer\FixerInterface', true);
    }

    /**
     * @return mixed[]|string[]
     */
    public function print(
        CodeSampleInterface $codeSample,
        RuleDefinition $ruleDefinition,
        bool $shouldUseConfigureMethod
    ): array {
        if ($codeSample instanceof ConfiguredCodeSample) {
            return $this->configuredCodeSamplerPrinter->printConfiguredCodeSample(
                $ruleDefinition,
                $codeSample,
                $shouldUseConfigureMethod
            );
        }

        return $this->diffCodeSamplePrinter->print($codeSample);
    }
}
