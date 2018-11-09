<?php
declare (strict_types=1);

namespace SmartHome\ControlPanel;

interface PluggableInterface
{
    /**
     * Returns list of supported commands' names.
     *
     * @return array
     */
    public function getCommandsList(): array;

    /**
     * Returns list of supported queries' names.
     *
     * @return array
     */
    public function getQueriesList(): array;

    /**
     * Executes a command on plugged device/service.
     *
     * @param CommandInterface $command
     */
    public function executeCommand(CommandInterface $command): void;

    /**
     * Executes query on plugged device/service and returns result.
     *
     * @param QueryInterface $query
     * @return QueryResultInterface
     */
    public function executeQuery(QueryInterface $query): QueryResultInterface;
}
