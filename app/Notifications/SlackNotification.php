<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SlackNotification extends Notification {
	use Queueable;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct() {
		//
	}

	/**
	 * Get the notification's delivery channels.
	 *
	 * @param  mixed $notifiable
	 *
	 * @return array
	 */
	public function via( $notifiable ) {
		return [ 'slack' ];
	}

	/**
	 * Get the mail representation of the notification.
	 *
	 * @param  mixed $notifiable
	 *
	 * @return \Illuminate\Notifications\Messages\MailMessage
	 */
	public function toMail( $notifiable ) {
		return ( new MailMessage )
			->line( 'The introduction to the notification.' )
			->action( 'Notification Action', url( '/' ) )
			->line( 'Thank you for using our application!' );
	}

	/**
	 * Get the array representation of the notification.
	 *
	 * @param  mixed $notifiable
	 *
	 * @return array
	 */
	public function toArray( $notifiable ) {
		return [
			//
		];
	}

	/**
	 * Slackのメッセージを飛ばす。
	 *
	 * @param $notifiable
	 *
	 * @return SlackMessage
	 */
	public function toSlack( $notifiable ) {
		return ( new SlackMessage )
			// ->success()
			->from( 'LaravelBot' )// ユーザ名
			->to( '#bot' )// 送信先チャンネル
			// ->image(':yousan:')                            // 画像アイコンらしい
			->content( 'Whoops! Something went wrong.' . time() ) // メッセージ
			;
	}

	public function routeNotificationForSlack()
	{
		return 'https://hooks.slack.com/services/T0XXXXX/BXXXX/ZAXXXXXXXXXXXXXXXXXXXX';
	}
}
