<form onSubmit="ga('send', 'event', 'reg_form', 'submited', 'registration');" autocomplete="off" id="form" action="http://youwin.kz/accounts/register/" method="post" enctype="application/x-www-form-urlencoded;charset=UTF-8">


    <div class="left_col">
        <label>Имя*</label><br/>
        <input id="first_name" name="first_name" type="text">


        <label>Фамилия*</label><br/>
        <input name="last_name" id="last_name" type="text">

        <label>Пол*</label><br/>
        <select name="sex" id="sex">
            <option>Выбери пол</option>
            <option value="0">Мужской</option>
            <option value="1">Женский</option>
        </select>
        <br/>
        <div class="input-radio">
            Курите ли вы сигареты?*
            <input type="radio" name="is_smoker" id="smoke" value="1" checked="checked"/>
            <label for="smoke">ДА</label>
            <input type="radio" name="is_smoker" id="nosmoke" value="0" />
            <label for="nosmoke">НЕТ</label>
        </div>

        <div style="float: right; position: relative; top:-34px; left: 380px; font-family: PT Sans Narrow">*Поля, обязательные для заполнения.</div>

    </div>
    <div class="right_col">
        <div style="position: absolute; left: 480px; top:185px; font-size: 46px;">+7</div>
        <label>Мобильный телефон*</label><br/>
        <input name="mobile_number" type="text" id="mob" maxlength="10"><br/>

        <label>E-mail*</label><br/>
        <input name="email" type="text" id="email">

        <label>Дата рождения*</label><br/>
        <select id="day" name="birth_day" style="width: 97px;">
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
        </select>
        <select id="month" name="birth_month" style="width: 150px; margin-left: 10px;">
            <option value='1'>Январь </option>
            <option value='2'>Февраль </option>
            <option value='3'>Март </option>
            <option value='4'>Апрель </option>
            <option value='5'>Май </option>
            <option value='6'>Июнь </option>
            <option value='7'>Июль </option>
            <option value='8'>Август </option>
            <option value='9'>Сентябрь </option>
            <option value='10'>Октябрь</option>
            <option value='11'>Ноябрь </option>
            <option value='12'>Декабрь </option>
        </select>
        <select id="year" name="birth_year" style="width: 98px; margin-left: 10px;">
            <option value='1900'>1900</option>
            <option value='1901'>1901</option>
            <option value='1902'>1902</option>
            <option value='1903'>1903</option>
            <option value='1904'>1904</option>
            <option value='1905'>1905</option>
            <option value='1906'>1906</option>
            <option value='1907'>1907</option>
            <option value='1908'>1908</option>
            <option value='1909'>1909</option>
            <option value='1910'>1910</option>
            <option value='1911'>1911</option>
            <option value='1912'>1912</option>
            <option value='1913'>1913</option>
            <option value='1914'>1914</option>
            <option value='1915'>1915</option>
            <option value='1916'>1916</option>
            <option value='1917'>1917</option>
            <option value='1918'>1918</option>
            <option value='1919'>1919</option>
            <option value='1920'>1920</option>
            <option value='1921'>1921</option>
            <option value='1922'>1922</option>
            <option value='1923'>1923</option>
            <option value='1924'>1924</option>
            <option value='1925'>1925</option>
            <option value='1926'>1926</option>
            <option value='1927'>1927</option>
            <option value='1928'>1928</option>
            <option value='1929'>1929</option>
            <option value='1930'>1930</option>
            <option value='1931'>1931</option>
            <option value='1932'>1932</option>
            <option value='1933'>1933</option>
            <option value='1934'>1934</option>
            <option value='1935'>1935</option>
            <option value='1936'>1936</option>
            <option value='1937'>1937</option>
            <option value='1938'>1938</option>
            <option value='1939'>1939</option>
            <option value='1940'>1940</option>
            <option value='1941'>1941</option>
            <option value='1942'>1942</option>
            <option value='1943'>1943</option>
            <option value='1944'>1944</option>
            <option value='1945'>1945</option>
            <option value='1946'>1946</option>
            <option value='1947'>1947</option>
            <option value='1948'>1948</option>
            <option value='1949'>1949</option>
            <option value='1950'>1950</option>
            <option value='1951'>1951</option>
            <option value='1952'>1952</option>
            <option value='1953'>1953</option>
            <option value='1954'>1954</option>
            <option value='1955'>1955</option>
            <option value='1956'>1956</option>
            <option value='1957'>1957</option>
            <option value='1958'>1958</option>
            <option value='1959'>1959</option>
            <option value='1960'>1960</option>
            <option value='1961'>1961</option>
            <option value='1962'>1962</option>
            <option value='1963'>1963</option>
            <option value='1964'>1964</option>
            <option value='1965'>1965</option>
            <option value='1966'>1966</option>
            <option value='1967'>1967</option>
            <option value='1968'>1968</option>
            <option value='1969'>1969</option>
            <option value='1970'>1970</option>
            <option value='1971'>1971</option>
            <option value='1972'>1972</option>
            <option value='1973'>1973</option>
            <option value='1974'>1974</option>
            <option value='1975'>1975</option>
            <option value='1976'>1976</option>
            <option value='1977'>1977</option>
            <option value='1978'>1978</option>
            <option value='1979'>1979</option>
            <option value='1980'>1980</option>
            <option value='1981'>1981</option>
            <option value='1982'>1982</option>
            <option value='1983'>1983</option>
            <option value='1984'>1984</option>
            <option value='1985'>1985</option>
            <option value='1986'>1986</option>
            <option value='1987'>1987</option>
            <option value='1988'>1988</option>
            <option value='1989'>1989</option>
            <option value='1990'>1990</option>
            <option value='1991'>1991</option>
            <option value='1992'>1992</option>
            <option value='1993'>1993</option>
            <option value='1994'>1994</option>
            <option value='1995'>1995</option>
            <option value='1996'>1996</option>
        </select>
    </div>
    <div class="tosite">
        <a id="submit-reg-form" href="#"><img src="/images/next.png" alt=""/></a>
        <!--<input id="submit-reg-form" type="image" src="/images/next.png" alt=""/>-->
        <img src="/images/next.png" alt=""/>
    </div>
</form>
