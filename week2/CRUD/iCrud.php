<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author 001325415
 */
interface iCrud 
{
	public function update();
	public function delete();
	public function create();
	public function readSingle();
	public function readAll();
}
