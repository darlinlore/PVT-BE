<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <legend>Datos del afiliado (Derechohabiente)</legend>

        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            Apoderado
        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <form method="get" class="form-horizontal">
                <div class="col-md-12">
                    <legend>Datos del Solicitante</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" :class="{'has-error': errors.has('applicant_identity_card') }">
                                <div class="col-md-4">
                                    <label class="control-label">Cédula de Identidad</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="applicant_identity_card" v-model.trim="applicant_identity_card" class="form-control" v-validate.initial="'required'">
                                        <span class="input-group-btn">
                                                <button class="btn" :class="errors.has('applicant_identity_card') ? 'btn-danger' : 'btn-primary' " type="button" @click="searchApplicant" type="button" role="button"><i class="fa fa-search"></i></button>
                                            </span>
                                    </div>
                                    <i v-show="errors.has('applicant_identity_card')" class="fa fa-warning text-danger"></i>
                                    <span v-show="errors.has('applicant_identity_card')" class="text-danger">@{{ errors.first('applicant_identity_card') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('applicant_city_identity_card') }">
                            <div class="col-md-4">
                                <label class="control-label">Ciudad de Expedición</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="applicant_city_identity_card" v-model.trim="applicant_city_identity_card_id" v-validate.initial="'required'">
                                        <option :value="null"></option>
                                        <option v-for="city in cities" :value="city.id">@{{ city.name }}</option>
                                    </select>
                                <i v-show="errors.has('applicant_city_identity_card')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('applicant_city_identity_card')" class="text-danger">@{{ errors.first('applicant_city_identity_card') }}</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Primer Nombre</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="applicant_first_name" v-model.trim="applicant_first_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Segundo Nombre</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="applicant_second_name" v-model.trim="applicant_second_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido Paterno</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="applicant_last_name" v-model.trim="applicant_last_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido Materno</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="applicant_mothers_last_name" v-model.trim="applicant_mothers_last_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido de Casada</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" :disabled="applicantIsMale" name="applicant_surname_husband" v-model.trim="applicant_surname_husband"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('applicant_gender') }">
                            <div class="col-md-4">
                                <label class="control-label">Genero</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control m-b" name="applicant_gender" v-model.trim="applicant_gender" v-validate.initial="'required'">
                                        <option :value="null"></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                <i v-show="errors.has('applicant_gender')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('applicant_gender')" class="text-danger">@{{ errors.first('applicant_gender') }}</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Fecha de Nacimiento</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" v-date class="form-control" v-model.trim="applicant_birth_date" name="applicant_birth_date">
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('applicant_nua') }">
                            <div class="col-md-4">
                                <label class="control-label">CUA/NUA</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="applicant_nua" v-model.trim="applicant_nua" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Teléfono del Solicitante</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2">
                                        <button class="btn btn-success" type="button" @click="addPhoneNumber"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-10">
                                        <div v-for="(phone,index) in applicant_phone_numbers">
                                            <div class="input-group">
                                                <input type="text" name="applicant_phone_number[]" v-model.trim="phone.value" :key="index" class="form-control" v-phone>
                                                <span class="input-group-btn">
                                                        <button class="btn btn-danger" v-show="applicant_phone_numbers.length > 1" @click="deletePhoneNumber(index)" type="button"><i class="fa fa-trash"></i></button>
                                                    </span>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Celular del Solicitante</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-2">
                                        <button class="btn btn-success" type="button" @click="addCellPhoneNumber"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-10">
                                        <div v-for="(cell_phone,index) in applicant_cell_phone_numbers">
                                            <div class="input-group">
                                                <input type="text" name="applicant_cell_phone_number[]" v-model.trim="cell_phone.value" :key="index" class="form-control"
                                                    v-cell-phone>
                                                <span class="input-group-btn">
                                                        <button class="btn btn-danger" v-show="applicant_cell_phone_numbers.length > 1" @click="deleteCellPhoneNumber(index)" type="button"><i class="fa fa-trash"></i></button>
                                                    </span>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <legend v-if="show_advisor_form">Datos del Tutor Legal</legend>
                    <div class="row" v-if="show_advisor_form">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Nombre de Juzgado</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="advisor_name_court" v-model.trim="advisor_name_court" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Nro de Resolucion</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="advisor_resolution_number" v-model.trim="advisor_resolution_number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if="show_advisor_form">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Fecha de Resolucion</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="advisor_resolution_date" v-model.trim="advisor_resolution_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                    <br>

                    <legend v-if=" show_apoderado_form ">Datos del Apoderado</legend>
                    <div class="row" v-if="show_apoderado_form ">
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_identity_card') }">
                            <div class="col-md-4">
                                <label class="control-label">Cédula de Identidad</label>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" name="legal_guardian_identity_card" v-model.trim="legal_guardian_identity_card" class="form-control" v-validate.initial="'required'">
                                    <span class="input-group-btn">
                                            <button class="btn" :class="errors.has('legal_guardian_identity_card') ? 'btn-danger' : 'btn-primary'" type="button" @click="searchLegalGuardian" type="button" role="button"><i class="fa fa-search"></i></button>
                                        </span>
                                </div>
                                <i v-show="errors.has('legal_guardian_identity_card')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_identity_card')" class="text-danger">@{{ errors.first('legal_guardian_identity_card') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Ciudad de Expedición</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="legal_guardian_city_identity_card" v-model.trim="legal_guardian_city_identity_card">
                                        <option :value="null"></option>
                                        <option v-for="city in cities" :value="city.id">@{{ city.name }}</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if="show_apoderado_form">
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_first_name') }">
                            <div class="col-md-4">
                                <label class="control-label">Primer Nombre</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_first_name" v-model.trim="legal_guardian_first_name" class="form-control" v-validate.initial="'required'">
                                <i v-show="errors.has('legal_guardian_first_name')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_first_name')" class="text-danger">@{{ errors.first('legal_guardian_first_name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Segundo Nombre</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_second_name" v-model.trim="legal_guardian_second_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if=" show_apoderado_form ">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido Paterno</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_last_name" v-model.trim="legal_guardian_last_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido Materno</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_mothers_last_name" v-model.trim="legal_guardian_mothers_last_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if=" show_apoderado_form ">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Apellido de Casada</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_surname_husband" v-model.trim="legal_guardian_surname_husband" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_gender') }">
                            <div class="col-md-4">
                                <label class="control-label">Genero</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control m-b" name="legal_guardian_gender" v-model.trim="legal_guardian_gender" v-validate.initial="'required'">
                                        <option :value="null"></option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                <i v-show="errors.has('legal_guardian_gender')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_gender')" class="text-danger">@{{ errors.first('legal_guardian_gender') }}</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if=" show_apoderado_form ">
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_number_authority') }">
                            <div class="col-md-4">
                                <label class="control-label">Nro de Poder</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_number_authority" v-model.trim="legal_guardian_number_authority" class="form-control"
                                    v-validate.initial="'required'">
                                <i v-show="errors.has('legal_guardian_number_authority')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_number_authority')" class="text-danger">@{{ errors.first('legal_guardian_number_authority') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_notary_of_public_faith') }">
                            <div class="col-md-4">
                                <label class=" control-label">Notaria de Fe Publica Nro</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_notary_of_public_faith" v-model.trim="legal_guardian_notary_of_public_faith" class="form-control"
                                    v-validate.initial="'required'">
                                <i v-show="errors.has('legal_guardian_notary_of_public_faith')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_notary_of_public_faith')" class="text-danger">@{{ errors.first('legal_guardian_notary_of_public_faith') }}</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" v-if=" show_apoderado_form ">
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_notary') }">
                            <div class="col-md-4">
                                <label class="control-label">Notario</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="legal_guardian_notary" v-model.trim="legal_guardian_notary" class="form-control" v-validate.initial="'required'">
                                <i v-show="errors.has('legal_guardian_notary')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_notary')" class="text-danger">@{{ errors.first('legal_guardian_notary') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6" :class="{'has-error': errors.has('legal_guardian_date_authority') }">
                            <div class="col-md-4">
                                <label class="control-label">Fecha de Poder</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" v-date name="legal_guardian_date_authority" v-model.trim="legal_guardian_date_authority" class="form-control"
                                    v-validate.initial="'required|max_current_date'">
                                <i v-show="errors.has('legal_guardian_date_authority')" class="fa fa-warning text-danger"></i>
                                <span v-show="errors.has('legal_guardian_date_authority')" class="text-danger">@{{ errors.first('legal_guardian_date_authority') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /div principal cyk -->
                <div class="row"></div>
            </form>
        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <legend>Direccion del Solicitante (@{{ applicant_type }})</legend>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group"><label class="col-sm-4 control-label">Ciudad</label>
                        <div class="col-md-8">
                            <select name="beneficiary_city_address_id" v-model="beneficiary_city_address_id" class="form-control">
                                    <option :value="null"></option>
                                    <option v-for="(city, index) in cities" :value="city.id" >@{{ city.name }}</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label class="col-sm-4 control-label">Zona</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_zone" v-model.trim="beneficiary_zone" class="form-control"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label class="col-sm-4 control-label">Calle</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_street" v-model.trim="beneficiary_street" class="form-control"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group"><label class="col-sm-4 control-label">Nro</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_number_address" v-model.trim="beneficiary_number_address" class="form-control"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>