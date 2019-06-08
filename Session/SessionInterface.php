<?php

/*
 * This file is part of the doyo/behat-coverage-extension project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Doyo\Behat\Coverage\Bridge\CodeCoverage\Session;

use Doyo\Behat\Coverage\Bridge\CodeCoverage\ProcessorInterface;
use Doyo\Behat\Coverage\Bridge\CodeCoverage\TestCase;

/**
 * Code coverage session.
 */
interface SessionInterface
{
    /**
     * Returns current session name.
     *
     * @return string
     */
    public function getName();

    /**
     * Set code coverage options for this session.
     *
     * @param array $options
     */
    public function setCodeCoverageOptions(array $options);

    /**
     * Get code coverage options for this session.
     *
     * @return array
     */
    public function getCodeCoverageOptions();

    /**
     * Set code filter options for this session.
     *
     * @param array $options
     */
    public function setFilterOptions(array  $options);

    /**
     * Get code filter options for this session.
     *
     * @return array
     */
    public function getFilterOptions(): array;

    /**
     * Set processor for this session.
     *
     * @param ProcessorInterface $processor
     */
    public function setProcessor(ProcessorInterface $processor);

    /**
     * Get processor for this session.
     *
     * @return ProcessorInterface|null
     */
    public function getProcessor();

    /**
     * Refresh current state from cache.
     */
    public function refresh();

    /**
     * Reset this session.
     */
    public function reset();

    /**
     * Save current state into cache.
     */
    public function save();

    /**
     * Returns true if have error.
     *
     * @return bool
     */
    public function hasExceptions();

    /**
     * Returns an array of exceptions.
     *
     * @return \Exception[]
     */
    public function getExceptions();

    /**
     * Set current TestCase to be used in code coverage.
     *
     * @param TestCase $testCase
     */
    public function setTestCase(TestCase $testCase);

    /**
     * Starting new code coverage session.
     */
    public function start();

    /**
     * @return array
     */
    public function stop();
}
