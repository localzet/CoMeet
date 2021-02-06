<?php
$app_name       = get_app_config("app_name");
$backdrop_image = base_url('uploads/' . get_app_config('backdrop_image'));
$og_image       = base_url('uploads/' . get_app_config('og_image'));
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('uploads/system_logo/' . get_app_config("favicon")); ?>">

  <!-- open-graph -->
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="Join a meeting from web: <?php echo base_url('room/' . $meeting_code); ?> Or Use meeting ID for mobile app.Meeting ID: <?php echo $meeting_code; ?>" />
  <meta name="twitter:title" content="Join a Meeting.Meeting ID: <?php echo $meeting_code; ?> - <?php echo $app_name; ?>" />
  <meta property="og:title" content="Join a Meeting.Meeting ID: <?php echo $meeting_code; ?> - <?php echo $app_name; ?>" />
  <meta name="twitter:image" content="<?php echo $og_image; ?>">
  <meta name="twitter:site" content="@<?php echo $app_name; ?>">

  <meta property="og:url" content="<?php echo base_url('room/' . $meeting_code); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="Join a meeting from web: <?php echo base_url('room/' . $meeting_code); ?> Or Use meeting ID for mobile app.Meeting ID: <?php echo $meeting_code; ?>" />
  <meta property="og:image:alt" content="<?php echo $app_name; ?> - Preview">
  <meta property="og:image" content="<?php echo $og_image; ?>" />

  <title><?php echo get_app_config("app_name") ?> - Meeting Room</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <script src='https://meet.jit.si/external_api.js' type="text/javascript"></script>
  <style type="text/css">
    #meeting {
      margin-bottom: -7px;
    }

    iframe {
      overflow: hidden;
      overflow-x: hidden;
      overflow-y: hidden;
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0px;
      left: 0px;
      right: 0px;
      bottom: 0px;
      height: 100%;
      width: 100%
    }
  </style>

</head>

<body class="bg-gradient-primary" style="margin:0px;padding:0px;overflow:hidden">
  <div id="meeting" class=""></div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script>
    const options = {
      configOverwrite: {
        testing: {
          disableE2EE: true,
          p2pTestMode: true
        },
        disableAudioLevels: false,
        audioLevelsInterval: 100,
        enableNoAudioDetection: true,
        enableNoisyMicDetection: true,
        startAudioOnly: false,
        hideLobbyButton: true,
        requireDisplayName: true,
        enableWelcomePage: false,
        enableClosePage: false,
        defaultLanguage: 'ru',
        prejoinPageEnabled: false,
        enableAutomaticUrlCopy: false,
        disableProfile: true,
        enableInsecureRoomNameWarning: false,
        disableRecordAudioNotification: true,
        disableThirdPartyRequests: true,
        disableDeepLinking: true,
        disableLocalVideoFlip: true,
        disableInviteFunctions: true,
        doNotStoreRoom: true,
        remoteVideoMenu: {
          disableKick: true
        },
        disableRemoteMute: true,
        brandingRoomAlias: 'https://mixmeet.tk/',
        makeJsonParserHappy: 'even if last key had a trailing comma'
      },
      interfaceConfigOverwrite: {
        APP_NAME: 'MixMeet',
        AUDIO_LEVEL_PRIMARY_COLOR: 'rgba(255,255,255,0.4)',
        AUDIO_LEVEL_SECONDARY_COLOR: 'rgba(255,255,255,0.2)',
        AUTO_PIN_LATEST_SCREEN_SHARE: 'remote-only',
        BRAND_WATERMARK_LINK: 'https://vk.com/localzet.projects',
        CLOSE_PAGE_GUEST_HINT: false,
        CONNECTION_INDICATOR_AUTO_HIDE_ENABLED: true,

        /**
         * How long the connection indicator should remain displayed before hiding.
         * Used in conjunction with CONNECTION_INDICATOR_AUTOHIDE_ENABLED.
         *
         * @type {number}
         */
        CONNECTION_INDICATOR_AUTO_HIDE_TIMEOUT: 5000,

        /**
         * If true, hides the connection indicators completely.
         *
         * @type {boolean}
         */
        CONNECTION_INDICATOR_DISABLED: false,
        DEFAULT_BACKGROUND: 'black',
        DEFAULT_LOCAL_DISPLAY_NAME: 'Вы',
        DEFAULT_LOGO_URL: 'https://sh.mixmeet.ml/100n.png',
        DEFAULT_REMOTE_DISPLAY_NAME: 'Пользователь',
        DEFAULT_WELCOME_PAGE_LOGO_URL: 'https://sh.mixmeet.ml/100n.png',
        DISABLE_DOMINANT_SPEAKER_INDICATOR: true,
        DISABLE_FOCUS_INDICATOR: true,
        /**
         * If true, notifications regarding joining/leaving are no longer displayed.
         */
        DISABLE_JOIN_LEAVE_NOTIFICATIONS: true,
        DISABLE_PRESENCE_STATUS: true,
        DISABLE_RINGING: true,
        DISABLE_TRANSCRIPTION_SUBTITLES: true,

        /**
         * Whether or not the blurred video background for large video should be
         * displayed on browsers that can support it.
         */
        DISABLE_VIDEO_BACKGROUND: true,

        DISPLAY_WELCOME_FOOTER: false,
        DISPLAY_WELCOME_PAGE_ADDITIONAL_CARD: false,
        DISPLAY_WELCOME_PAGE_CONTENT: false,
        DISPLAY_WELCOME_PAGE_TOOLBAR_ADDITIONAL_CONTENT: false,

        ENABLE_DIAL_OUT: true,

        ENABLE_FEEDBACK_ANIMATION: false,

        FILM_STRIP_MAX_HEIGHT: 120,

        filmStripOnly: false,

        GENERATE_ROOMNAMES_ON_WELCOME_PAGE: false,

        HIDE_DEEP_LINKING_LOGO: true,

        HIDE_INVITE_MORE_HEADER: true,

        INITIAL_TOOLBAR_TIMEOUT: 20000,
        JITSI_WATERMARK_LINK: 'https://vk.com/localzet.projects',

        LANG_DETECTION: false,
        LIVE_STREAMING_HELP_LINK: '',
        LOCAL_THUMBNAIL_RATIO: 16 / 9,

        MOBILE_APP_PROMO: false,

        NATIVE_APP_NAME: 'MixMeet',

        OPTIMAL_BROWSERS: ['chrome', 'chromium', 'firefox', 'nwjs', 'electron', 'safari'],

        POLICY_LOGO: null,
        PROVIDER_NAME: 'Zorin Projects',

        TOOLBAR_ALWAYS_VISIBLE: true,

        RECENT_LIST_ENABLED: true,
        REMOTE_THUMBNAIL_RATIO: 1, // 1:1

        SETTINGS_SECTIONS: ['devices'],
        SHOW_BRAND_WATERMARK: false,

        SHOW_CHROME_EXTENSION_BANNER: false,

        SHOW_DEEP_LINKING_IMAGE: false,
        SHOW_JITSI_WATERMARK: true,
        SHOW_POWERED_BY: false,
        SHOW_PROMOTIONAL_CLOSE_PAGE: false,
        SHOW_WATERMARK_FOR_GUESTS: true,

        SUPPORT_URL: 'https://vk.me/localzet.projects',

        // TOOLBAR_BUTTONS: [
        //   'microphone', 'camera', 'desktop', 'fullscreen',
        //   'fodeviceselection', 'chat',
        //   'etherpad', 'settings',
        //   'videoquality',
        //   'tileview'
        // ],

        TOOLBAR_BUTTONS: [
          'microphone', 'camera', 'desktop', 'fullscreen',
          'fodeviceselection', 'profile', 'chat', 'recording',
          'livestreaming', 'etherpad', 'settings',
          'videoquality',
          'tileview', 'download', 'mute-everyone', 'security'
        ],

        // TOOLBAR_BUTTONS: [
        //     'microphone', 'camera', 'closedcaptions', 'desktop', 'embedmeeting', 'fullscreen',
        //     'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
        //     'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
        //     'videoquality', 'filmstrip', 'invite', 'feedback', 'stats', 'shortcuts',
        //     'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone', 'security'
        // ],

        TOOLBAR_TIMEOUT: 4000,


        UNSUPPORTED_BROWSERS: [],

        VERTICAL_FILMSTRIP: true,

        VIDEO_LAYOUT_FIT: 'both',

        /**
         * Если true, скрывает метку качества видео, указывающую статус разрешения.
         * текущего большого видео.
         *
         * @type {boolean}
         */

        VIDEO_QUALITY_LABEL_DISABLED: true,

        HIDE_KICK_BUTTON_FOR_GUESTS: true,

        /**
         * Сколько столбцов может расширяться в виде плитки. Уважаемый диапазон
         * от 1 до 5.
         */
        // TILE_VIEW_MAX_COLUMNS: 8,

        /**
         * Переопределить поведение некоторых уведомлений, чтобы они отображались до тех пор, пока
         * отклонено явным образом действием пользователя. Значение - как долго в
         * миллисекунды, эти уведомления должны отображаться.
         */
        ENFORCE_NOTIFICATION_AUTO_DISMISS_TIMEOUT: 5000,

        makeJsonParserHappy: 'even if last key had a trailing comma'
      },
      noSSL: false
    };
  </script>
  <script type="text/javascript">
    var domain = "meet.jit.si";
    options.roomName = "<?php echo $meeting_info->meeting_code; ?>";
    options.width = "100%";
    options.height = "100%";
    options.parentNode = document.querySelector('#meeting');
    var api = new JitsiMeetExternalAPI(domain, options);
    api.executeCommand('subject', '<?php echo $meeting_info->meeting_title; ?>');
  </script>
</body>

</html>