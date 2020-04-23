<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     *                   Motoharu Kubo  <mkubo@3ware.co.jp>
     *                   Oyaji          <oyaji@mail.aconus.com>
     * All rights reserved.
     *
     * Fri Jul 22 2016 YAMAMOTO Takashi <yamachan@piwikjapan.org>
     * - Checked for version 1.0.4
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    //$lang['banner_subtitle'] =  "ドメインの詳細";

    // Table headers
    $lang['header_domain'] =  "ドメインの詳細";
    $lang['header_admins'] =  "ドメイン管理者";
    $lang['header_revoke'] =  "廃止";
    $lang['header_admin_name'] =  "管理者";
    $lang['header_add_administrator'] =  "管理者の追加";
    $lang['header_transport'] = "Set SMTP Transport Host";

    // Text labels
    $lang['text_yes'] =  "はい";
    $lang['text_no'] =  "いいえ";
    $lang['text_virus_scanning'] =  "ウィルスチェック";
    $lang['text_enabled'] =  "実施する";
    $lang['text_disabled'] =  "実施しない";
    $lang['text_quarantined'] =  "隔離する";
    $lang['text_discarded'] =  "破棄する";
    $lang['text_labeled'] =  "ラベルを付けて配送する";
    $lang['text_detected_viruses'] =  "検出したウィルス感染メールの処理";
    $lang['text_spam_filtering'] =  "スパムチェック";
    $lang['text_detected_spam'] =  "検出したスパムの処理";
    $lang['text_prefix_subject'] =  "スパムメールの件名に見出しを付加する";
    $lang['text_add_spam_header'] =  "X-Spam:ヘッダを付加するスコア";
    $lang['text_consider_mail_spam'] =  "スパムと判断するスコア";
    $lang['text_quarantine_spam'] =  "スパムを隔離するスコア";
    $lang['text_kill_spam'] =  "スパムを破棄する（隔離しない）スコア";
    $lang['text_attachment_filtering'] =  "添付ファイルタイプによるフィルタリング";
    $lang['text_mail_with_attachments'] =  "危険な添付ファイルを持つメールの処理";
    $lang['text_bad_header_filtering'] =  "不正なヘッダを持つメールのフィルタリング";
    $lang['text_mail_with_bad_headers'] =  "不正ヘッダを持つメールの処理";
    $lang['text_settings_updated'] =  "メールフィルタの設定を更新しました";
    $lang['text_system_default'] =  "システム全体のデフォルト";
    $lang['text_no_admins'] =  "ドメイン管理者は設定されていません";
    $lang['text_no_available_admins'] =  "このドメインを管理できるユーザがいません";
    $lang['text_administrators_added'] =  "このドメインの管理者を追加しました。";
    $lang['text_admins_revoked'] =  "指定されたユーザの管理者権限を取り消しました";
    $lang['text_cache_ham_question'] =  "正規（と思われる）メールを保管するか";
    $lang['text_enable_user_autocreation'] =  "ユーザの自動登録を有効にする";
    $lang['text_domain_theme'] = "デフォルトのテーマ";
    $lang['text_routing_domain'] = "Routing domain name (example.com)";
    $lang['text_transport'] = "Transport Host (format: smtp:[domain])";
    $lang['text_transport_error'] = "Error setting transport: %s";
    $lang['text_transport_set'] = "Transport has been updated";
    $lang['text_invalid_transport_form'] = "Invalid form for transport request";

    // Buttons
    $lang['button_reset'] =  "リセット";
    $lang['button_update_domain'] =  "ドメインのデフォルト設定を更新する";
    $lang['button_revoke'] =  "管理者権限を取り消す";
    $lang['button_grant'] =  "管理者権限を与える";
    $lang['button_transport'] =  "Set SMTP Transport";


    // Links
    $lang['link_domain_settings'] =  "ドメインの詳細設定に戻る";
    $lang['link_admin_domains'] =  "ドメイン管理メニューに戻る";

    //tabs
    $lang['tab_domain_settings'] = "Thresholds";
    $lang['tab_misc_settings'] = "その他";
    $lang['tab_grant_admin'] = "Grant Admin";
    $lang['tab_revoke_admin'] = "Revoke Admin";
    $lang['tab_change_login'] = "Change Login";
    $lang['tab_addresses'] = "メールアドレス";
    $lang['tab_transport'] = "Domain Transport";
?>