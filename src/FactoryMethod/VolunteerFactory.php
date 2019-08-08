<?php

class VolunteerFactory implements Factory
{
    public function createLeifeng()
    {
        return new Volunteer();
    }
}