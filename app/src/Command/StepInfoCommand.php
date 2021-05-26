<?php


namespace App\Command;


class StepInfoCommand extends Command
{
    protected static $defaultName = 'app:step:info';
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $step = $this->cache->get('app.current_step', function ($item) {
            $process = new Process(['git', 'tag', '-l', '--points-at',
                'HEAD']);
            $process->mustRun();
            $item->expiresAfter(30);
        });
        $output->writeln($step);
        return 0;
    }

}