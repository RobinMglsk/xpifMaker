<?php

/* 
 * The MIT License
 *
 * Copyright 2015 Administrator.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

//include the xpifMaker Class file
include_once '../xpifMaker.php';

//set the content type to be XML, so that the browser will recognise it as XML.
header("content-type: application/xml; charset=UTF-8");

//initiate and instance of the Object
$xpfObject = new xpifMaker;

//basic properties (mandatory)
$xpfObject->setProperty("job_name", "Example 01 Ticket");
$xpfObject->setProperty("requesting_user_name", "Jane Doe");
$xpfObject->setProperty("copies", 5);
$xpfObject->setProperty("sides", "2");

//render the XPIF Ticket
$xml_string = $xpfObject->renderTicket('C:\inetpub\wwwroot\xpifMaker\Examples\Example_01_Output.xpf');

//echo XPIF Ticket to screen
echo $xml_string;