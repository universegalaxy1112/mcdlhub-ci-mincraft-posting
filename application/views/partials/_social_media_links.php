<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!--if facebook url exists-->
<?php if (!empty($this->settings->facebook_url)) : ?>
    <li>
        <a class="facebook" href="<?php echo html_escape($this->settings->facebook_url); ?>"
           target="_blank"><i class="icon-facebook"></i></a>
    </li>
<?php endif; ?>
    <!--if twitter url exists-->
<?php if (!empty($this->settings->twitter_url)) : ?>
    <li>
        <a class="twitter" href="<?php echo html_escape($this->settings->twitter_url); ?>"
           target="_blank"><i class="icon-twitter"></i></a>
    </li>
<?php endif; ?>
    <!--if pinterest url exists-->
<?php if (!empty($this->settings->pinterest_url)) : ?>
    <li>
        <a class="pinterest" href="<?php echo html_escape($this->settings->pinterest_url); ?>"
           target="_blank"><i class="icon-pinterest"></i></a>
    </li>
<?php endif; ?>
    <!--if instagram url exists-->
<?php if (!empty($this->settings->instagram_url)) : ?>
    <li>
        <a class="instagram" href="<?php echo html_escape($this->settings->instagram_url); ?>"
           target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" version="1.1" width="16" height="16">
                <path d="M40 12s-4.586-3.59-10-4l-.488.977C34.406 10.176 36.652 11.89 39 14c-4.047-2.066-8.04-4-15-4-6.96 0-10.953 1.934-15 4 2.348-2.11 5.02-4.016 9.488-5.023L18 8c-5.68.535-10 4-10 4s-5.121 7.426-6 22c5.16 5.953 13 6 13 6l1.64-2.184C13.856 36.848 10.716 35.121 8 32c3.238 2.45 8.125 5 16 5s12.762-2.55 16-5c-2.715 3.121-5.855 4.848-8.64 5.816L33 40s7.84-.047 13-6c-.879-14.574-6-22-6-22zM17.5 30c-1.934 0-3.5-1.79-3.5-4s1.566-4 3.5-4 3.5 1.79 3.5 4-1.566 4-3.5 4zm13 0c-1.934 0-3.5-1.79-3.5-4s1.566-4 3.5-4 3.5 1.79 3.5 4-1.566 4-3.5 4z"
                      fill="#FFFFFF" id="surface1"/>
            </svg>
        </a>
    </li>
<?php endif; ?>
    <!--if linkedin url exists-->
<?php if (!empty($this->settings->linkedin_url)) : ?>
    <li>
        <a class="linkedin" href="<?php echo html_escape($this->settings->linkedin_url); ?>"
           target="_blank"><i class="icon-linkedin"></i></a>
    </li>
<?php endif; ?>

    <!--if vk url exists-->
<?php if (!empty($this->settings->vk_url)) : ?>
    <li>
        <a class="vk" href="<?php echo html_escape($this->settings->vk_url); ?>"
           target="_blank"><i class="icon-vk"></i></a>
    </li>
<?php endif; ?>

    <!--if telegram url exists-->
<?php if (!empty($this->settings->telegram_url)) : ?>
    <li>
        <a class="telegram" href="<?php echo html_escape($this->settings->telegram_url); ?>"
           target="_blank"><i class="icon-telegram"></i></a>
    </li>
<?php endif; ?>

    <!--if youtube url exists-->
<?php if (!empty($this->settings->youtube_url)) : ?>
    <li>
        <a class="youtube" href="<?php echo html_escape($this->settings->youtube_url); ?>"
           target="_blank"><i class="icon-youtube"></i></a>
    </li>
<?php endif; ?>

    <!--if rss active-->
<?php if (!empty($this->general_settings->show_rss) && $rss_hide == false) : ?>
    <li>
        <a class="rss" href="<?php echo generate_url('rss_feeds'); ?>"><i class="icon-rss"></i>
        </a>
    </li>
<?php endif; ?>