<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => '失去焦點', //max 13 characters
    'clickToFocus' => '點擊這裡恢復遊戲', //max 30 characters
    'specMode' => '觀戰模式',
    'specModeInfo' => '當前處於觀戰模式.',
    'endSpec' => '輸入 /play 加入遊戲', //keep '/play'
    'typeHelp' => '輸入 /help 查看可用指令.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => '不在遊戲中', //max 12
    'waitNext' => '等待當前局結束',
    'waitNext2' => '請等待下一局開始',
    'pressStart' => '按 \'New game\' 開始', //'New game' should be same as in game.newGame
    'slowDown' => '降速！', //When a speed limit is exceeded
    'speedLimitIs' => '限速設置爲', //In a sentence: The speed limit is 2 PPS
    'connecting' => '連接中...', //when connecting to the game server
    'signingIn' => '登錄中',
    'loginFail' => '登錄失敗!',
    'mapLoading' => '地圖讀取中...',

    //Chat
    'warning' => '警告',
    'inactive1' => '觀戰模式已開啟. 在聊天框輸入/play取消觀戰.',
    'inactive2' => '檢測到當前局無操作，下一局仍然無操作將會開啓觀戰模式.',
    'nickFill' => '輸入你的用戶名方可聊天！',
    'setButton' => '設置', //max 4
    'sendButton' => '發送', //max 4
    'rNameReq' => '房間名不能爲空！',
    'newsUser' => '公告', //special username in chat
    'serverUser' => '服務器', //special username in chat
    'noNamed' => '遊客', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '旁觀者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'加入了房間.', //in 'User1 joined the room.'
    'joined' => '加入了！', //in title: 'User1 joined!'
    'userCame' => '加入觀戰',  //in 'User1 came to watch.'
    'isSpectating' => '正在觀戰', //in 'User1 is now spectating.'
    'spectator' => '旁觀者模式',
    'hasLeft' => '已離開.', //in 'Spectator User1 has left.'
    'signedAs' => '您登錄的賬號爲',
    'welcome' => '歡迎，', //in 'Welcome User1!'
    'welcomeIn' => '歡迎來到', //in 'Welcome in RoomName.'
    'noSpectators' => '當前沒有人觀戰.',
    'replayAvailable' => '在此觀看錄像',
    'oldVer' => '您正在使用舊版，請使用Ctrl＋F5(強刷新)讀取新版！',
    'oldVer2' => '你仍然在使用舊版！請按 {key} 鍵重新讀取客戶端.',
    'privateRoom' => '這裏是可以不受打擾的私密房間. 公共房間請查看大廳.',
    'restartInfo' =>  '按 F4 或 自定義的鍵位重新開始.',
    'joinLinkInfo' => '這是私密房間. 其他人進入此房只能通過以下鏈接:',
    //Dynamic elements
    'received' => '接受行數', //max 15
    'finesse' => '多餘操作',   //max 15

    //List of rooms
    'roomName' => '房間名',
    'games' => '遊戲局數', //number of games played in a room
    'players' => '玩家數', //number of players

    //Results
    'name' => '名稱',
    'wins' => '獲勝局數',
    'time' => '時間', //as game duration
    'received' => '接受行數',
    'sent' => '發送行數',
    'blocks' => '放置方塊數', //as number of blocks placed
    'ren' => '連擊數',

    //Practice mode result
    'gameTime' => '時間', //in Sprint time: xx.xx
    'see' => '查看', //in 'See 40L leaderboard'
    'leaderboard' => '排行榜',

    //Less common strings, can stay untranslated
    'warning2' => '警告',
    'connected' => '已連接',
    'client' => '客戶端',
    'notConnected' => '未連接',
    'connLost' => '與服務器失去連接！',
    'lastGame' => '上一次遊戲:',
    'roomSettings' => '房間設置:',
    'attack' => '攻擊',
    'combo' => '連擊',
    'solid' => '實心',
    'clear' => '消除',
    'mode' => '模式',
    'garbage' => '垃圾行',
    'garbageDelay' => '垃圾行延遲',
    'messiness' => '垃圾行混亂度',
    'replay' => '錄像回放',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => '輸入 NullpoMino DAS 值:',
    'suggestedIs' => '建議的 DAS 值爲',
    'applyConfirm' => '是否應用？',
    'invalidDAS' => 'DAS 值無效，未做更改！',
    'settingsChanged' => '在一局遊戲中更改了設置.錄像回放無效.',
    'segment' => '分段',//Segment
    'duration' => '持續時間',
    'roomFull' => '房間已滿',
    'lobbyInfo' => '此聊天已與 {discord} 連通.',
    'newHost' => '你現在成爲了房主.',
    'badRoom' => '房間不存在，正在加入默認房間!',
    'stngsChanged' => '房主更改了設置',
    'stngsCustom' => '自定義設置',
    'aSpec' => '已經處於觀戰模式!',
    'aPlay' => '已經加入遊戲!',
    'repFail' => '錄像在線保存失敗.',
    'repInChat' => '回放文件已經輸出到聊天框. 如需保存，將下方文本框內容複製，並粘貼到文本編輯器保存.',
    'repTxtInfo' => '然後可以在錄像播放器播放複製好的回放文件，或者可能重新提交到站點.',

    'newPB' => '個人歷史最佳',
    'firstPB' => '這是您首次進行遊戲.再次突破最佳記錄即可追蹤進步歷程.',
    'infoPB' => '您之前的記錄為
 {prevPB}，於 {prevAgo} 達成. 進步了 {PBdiff}.',
    'daysAgo' => '天前',

    'raceFin' => '比賽已結束',
    'raceFinInfo' => '你可以繼續完成此次比賽，但下一輪可以隨時開始.',

    'notTSD' => '非TSD消除',
    'notTSDInfo' => '僅允許T-spin Double/T2消除',

    'fwDetect' => '四寬堆積',
    'fwDetectInfo' => '檢測到4w堆積，自攻自受！',
    
    'oops' => '哎呀!',
    'chatNA' => '公共聊天在低於{chReq}小時遊戲時間時不可用.(遊客/註冊賬戶均受此限制)',
    'leMore' => '瞭解更多',

    'connLimit' => '當前已達到此IP可開放連接的最大數量. 如果您需要提升限制數量，請使用Discord與我們聯繫',
    'idleDC' => '由於長時間未活動而斷開連接！觀戰位已滿',
    'RLreach' => '已達到速度限制.',
    'ban1' => '【線上Ban】您對在線遊戲的訪問已被永久限制. 你仍然可以玩單人模式.',
    'ban2' => '【賬戶Ban】此用戶帳戶被禁止使用. 重新登錄網站以獲取詳細信息.',
    'ncGS' => '連接到遊戲服務器失敗，請嘗試{refr}.',
    'refr' => '刷新頁面',

    //Room info detail
    'noPlayers' => '無玩家',
    'cntMore' => '{cnt} 玩家',          //e.g. +10 more
    'cntGuests' => '{cnt} 遊客',      //e.g. +10 guests
    'cntSpec' => '{cnt} 觀戰',    //e.g. +10 spectating
    'joinPossible' => '可加入此房間',
    'notEligible' => '不滿足加入條件',
    'gTimeShort' => '遊戲時間',
    'on' => '開啟
',
    'off' => '關閉',
];
