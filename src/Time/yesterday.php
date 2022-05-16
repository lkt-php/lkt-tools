<?php

namespace Lkt\Tools\Time;

function yesterday($format) {
    return date($format, strtotime('-1 days'));
}