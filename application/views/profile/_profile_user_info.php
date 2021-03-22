<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--user profile info-->
<div class="row-custom">
    <div class="profile-details">
        <div class="left">
            <img src="<?php echo get_user_avatar($user->avatar); ?>" alt="<?php echo html_escape($user->username); ?>"
                 class="img-profile">
        </div>
        <div class="right">
            <div class="row-custom">
                <h1 class="username"><?php echo html_escape($user->username); ?></h1>
            </div>
            <div class="row-custom">
                <p class="p-last-seen">
                    <span class="last-seen <?php echo (is_user_online($user->last_seen)) ? 'last-seen-online' : ''; ?>"> <i
                                class="icon-circle"></i> <?php echo trans("last_seen"); ?>&nbsp;<?php echo time_ago($user->last_seen); ?></span>
                </p>
            </div>

            <div class="row-custom">
                <p class="description">
                    <?php echo html_escape($user->about_me); ?>
                </p>
            </div>

            <div class="row-custom user-contact">
                <span class="info"><?php echo trans("member_since"); ?>&nbsp;<?php echo helper_date_format($user->created_at); ?></span>
                <?php if ($this->general_settings->show_user_email_on_profile == 1 && $user->show_email_on_profile == 1): ?>
                    <span class="info"><i class="icon-envelope"></i><?php echo html_escape($user->email); ?></span>
                <?php endif; ?>
            </div>

            <div class="row-custom profile-buttons">
                <?php if ($this->auth_check): ?>
                    <?php if ($this->auth_user->id != $user->id): ?>
                        <!--form follow-->
                        <?php echo form_open('follow-unfollow-user', ['class' => 'form-inline']); ?>
                        <input type="hidden" name="profile_id" value="<?php echo $user->id; ?>">
                        <?php if (is_user_follows($user->id, $this->auth_user->id)): ?>
                            <button class="btn btn-md btn-custom btn-follow"><i
                                        class="icon-user-plus"></i><?php echo trans("unfollow"); ?></button>
                        <?php else: ?>
                            <button class="btn btn-md btn-custom btn-follow"><i
                                        class="icon-user-plus"></i><?php echo trans("follow"); ?></button>
                        <?php endif; ?>
                        <?php echo form_close(); ?>
                    <?php endif; ?>
                <?php else: ?>
                    <button class="btn btn-md btn-custom btn-follow" data-toggle="modal" data-target="#modal-login"><i
                                class="icon-user-plus"></i><?php echo trans("follow"); ?></button>
                <?php endif; ?>
                <div class="social">
                    <ul>
                        <?php /*if (!empty($user->facebook_url)): */ ?><!--
                            <li><a href="<?php /*echo $user->facebook_url; */ ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                        --><?php /*endif; */ ?>
                        <?php if (!empty($user->twitter_url)): ?>
                            <li><a href="<?php echo $user->twitter_url; ?>" target="_blank"><i class="icon-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($user->instagram_url)): ?>
                            <li><a href="<?php echo $user->instagram_url; ?>"
                                   target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Layer_1" x="0px"
                                         y="0px" width="14px" height="14px" viewBox="0 0 16 16" xml:space="preserve"><g
                                                fill="#a0a0a0">
                                            <path d="M1 0L0 3v11h4v2h2l2-2h3l4-4.26V0H1zm13 9l-2.8 3H7.654L5.5 13.567V12H2V1h12v8z"/>
                                            <path
                                                    d="M7 4h1v4H7z"/>
                                            <path d="M10 4h1v4h-1z"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($user->youtube_url)): ?>
                            <li><a href="<?php echo $user->youtube_url; ?>" target="_blank"><i class="icon-youtube"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php /*if (!empty($user->pinterest_url)): */ ?><!--
                            <li><a href="<?php /*echo $user->pinterest_url; */ ?>" target="_blank"><i class="icon-pinterest"></i></a></li>
                        <?php /*endif; */ ?>
                        <?php /*if (!empty($user->linkedin_url)): */ ?>
                            <li><a href="<?php /*echo $user->linkedin_url; */ ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
                        <?php /*endif; */ ?>
                        <?php /*if (!empty($user->vk_url)): */ ?>
                            <li><a href="<?php /*echo $user->vk_url; */ ?>" target="_blank"><i class="icon-vk"></i></a></li>
                        <?php /*endif; */ ?>
                        <?php /*if (!empty($user->telegram_url)): */ ?>
                            <li><a href="<?php /*echo $user->telegram_url; */ ?>" target="_blank"><i class="icon-telegram"></i></a></li>
                        <?php /*endif; */ ?>

                        <?php /*if ($user->show_rss_feeds && $user_posts_count > 0): */ ?>
                            <li><a href="<?php /*echo lang_base_url() . "rss/author/" . $user->slug; */ ?>"><i class="icon-rss"></i></a></li>
                        --><?php /*endif; */ ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>