<?php


namespace Lkt\Tools;

function yesterday($format) {
    return date($format, strtotime('-1 days'));
}