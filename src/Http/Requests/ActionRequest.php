<?php

namespace R64\NovaFields\Http\Requests;

use R64\NovaFields\Traits\HasDependencies;
use Laravel\Nova\Http\Requests\ActionRequest as NovaActionRequest;

class ActionRequest extends NovaActionRequest {

	use HasDependencies;
}
