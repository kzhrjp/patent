<?php
namespace Deployer;

require 'recipe/laravel.php';


// デプロイしたプロジェクトを直近5件保存しておく (デフォルトは3件)
// -> 保存しておいた分だけrollbackコマンドを使用できる
set('keep_releases', 5);

// Project name
set('application', 'patent');

// Project repository
set('repository', 'https://github.com/kzhrjp/patent.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_files', ['.env']);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

// Hosts

host('157.65.30.22')
	->stage('prod')
	->user('root')
	->port(22)
	->identityFile('/Users/tomoda/.ssh/ssh-g10ugrg6.pem')
    ->set('deploy_path', '/var/www/');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});
// タスク定義
task('my_task', function() {
	write('<comment>executing my task!</comment>');
})->desc('タスクの説明');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

