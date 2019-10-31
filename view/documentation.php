<main>
    <article class="">
        <header>
                <h1>Kodstruktur och dokumentation</h1>
                <p class="author">Uppdaterad <time>30/10-2019</time> av: Katarina Käll</p>
        </header>
            <p>Jag har framförallt jobbat med sidokontroller. Tanken är att skapa
            en webbsida som är lätt att underhålla. Man ska kunna lägga in en ny
            artikel eller lägga till ett nytt objekt i databasen och den/det ska
            kunna visas upp på sidan utan att ytterligare integrering ska krävas.
            Jag har försökt att undvika att hårdkoda innehållet utan jag har strävat
            efter att jobba med att hämta innehåll från databasen och presentera
            det. När jag har lagt till galleri och adminfunktion så har jag använt
            mig av multisidkontroller då jag inte hämtat innehållet i dem från någon
            databas. Jag har följt den mappstruktur som vi har lärt oss under
            utbildningen. Funktionerna är samlade i en fil som heter functions som
            ligger i en mapp med namnet src. Css-en är skriven i en fil. Den heter
            style och ligger i mappen css. Innehållet till multisidorna har fått
            egna mappar, admin respektive gallery. Annars ligger innehållet i view
            mappen och grundsidorna ligger i fritt i grunden.</p>
            <p>Sidan är relativt responsiv. Hamburgermenyn som i storskärm ligger
            till höger flyttar sig till vänster när skärmstorleken minskar. Bilder
            tar större plats och presenteras som block istället för att flyta med
            i texten när skärmen är liten. Undermenyn som finns till vänster i
            storskärm förflyttar sig till mitten och menyvalen centreras vid liten
            skräm.</p>
            <p>En stor förbättring hade varit att öka säkerheten på sidan genom
            att ha användarna i en databas. Just nu ligger de i en array i
            konfigurationsfilen. Jag hade gärna gjort om förstasidan till något
            mer spännande, men när jag skapade den var jag väldigt oinspirerad.
            Man skulle även kunna lägga till funktionallitet för att skriva och
            ladda upp nya artiklar till databasen på sidan, funktionallitet för att
            uppdatera och även ta bort artiklar. Det hade även vartit bra att lägga
            till en funktion för att återställa databasen. Slutligen skulle jag
            vilja öka kompabilitete med andra webbläsare så att sidan även är responsiv
            i andra platfomar tex iphone.</p>
    </article>
</main>
