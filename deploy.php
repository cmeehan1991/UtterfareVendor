<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'Utterfare Vendor');

// Project repository
set('repository', 'https://github.com/cmeehan1991/utterfarevendor');

set('use_relative_symlinks', true);

set('ssh_multiplexing', true);

// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true); 

set('git_recursive', false);

set('branch', 'master');

set('default_stage', 'dev ');

// Shared files/dirs between deploys 
//set('shared_files', []);
//set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);

// Hosts

host('dev')
	->hostname('utterfare.com')
	->stage('dev')
	->user('cmeehan')
	->port('2222')
    ->set('deploy_path', '/home1/cmeehan/public_html/ufdev');
    
host('production')
	->hostname('utterfare.com')
	->stage('production')
	->user('cmeehan')
	->port('2222')
    ->set('deploy_path', '/home1/cmeehan/public_html/vendor')
    ->set('shared_files', []);    
    
// Tasks

task('pwd', function(){
	$result = run('pwd');
	writeln("Current dir: $result");
});

task('move_to_live_dev', function(){
	run('cp -af public_html/ufdev/current/. /home1/cmeehan/public_html/ufdev/');
});

task('move_to_live_production', function(){
	run('cp -af public_html/vendor/current/. /home1/cmeehan/public_html/vendor');
});

task('test_task', function(){
	writeln('this is a test');
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

after('cleanup', 'move_to_live_production');
