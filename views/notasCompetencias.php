<?php
include_once '../html/header.php';
?>

<div class="row">
  <div class="col s12 m10 push-m1">
    <h3 class="light">Colaboradores</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Setor:</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Pedro Soares</td>
          <td>Node.js</td>
        </tr>
      </tbody>
    </table>

    <br>
    <br>

    <table class="striped">
      <thead>
        <tr>
          <th>Competencia 1</th>
          <th>Nivel Geral</th>
          <th>Competencia 2</th>
          <th>Nivel Geral</th>
          <th>Competencia 3</th>
          <th>Nivel Geral</th>
          <th>Nivel de Areal</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <table>
              <tr>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Conhecimento</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Habilidade</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Atitude</label>
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td></td>
          <td>
          <table>
              <tr>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Conhecimento</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Habilidade</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Atitude</label>
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td></td>
          <td><table>
              <tr>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Conhecimento</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Habilidade</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected></option>
                      <option value="1">Inapto</option>
                      <option value="2">Aprediz</option>
                      <option value="3">Iniciante</option>
                      <option value="4">Intermediario</option>
                      <option value="5">Expecialista</option>
                      <option value="6">Não Aplicado</option>
                    </select>
                    <label class="labelblack">Atitude</label>
                  </div>
                </td>
              </tr>
            </table></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <br>

    <button type="submit" class="btn">add Notas</button>
    <a href="/views/listaColaboradores.php" class="btn-floating red"><i class="material-icons">chevron_left</i></a>
  </div>
</div>

<?php
include_once '../html/footer.php';
?>