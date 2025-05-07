<style>
   body {
  font-family: 'Poppins', sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}
.disc-traits-section .section-title_custom{
    padding-left: 144px;text-align: left;
}
.disc-traits-section {
    padding: 10px 20px;
    text-align: center;
    background: #ffffff;
    background-image: url(/images/diagram-styles.png);
    background-repeat: no-repeat;
    background-position: center;
}

.section-title {
  font-weight: bold;
  margin-bottom: 30px;
  color: #000;
}

.traits-container {
  max-width: 1000px;
  margin: 0 auto;
}

.traits-row {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    margin-bottom: 114px;
    padding-top: 45px;
}

.trait-box {
  border: 2px solid;
  border-radius: 10px;
  padding: 20px;
  margin-left: -30px;
  width: 30%;
  text-align: center;
  font-size: 14px;
  line-height: 1.5;
}

.dominant {
  border-color: #ff4c4c;
}

.influential {
  border-color: #ffc107;
}

.cautious {
  border-color: #007bff;
}

.supportive {
  border-color: #28a745;
}

.trait-box h3 {
  margin: 0 0 10px;
  font-size: 18px;
  color: #000;
}

.disc-diagram {
  margin: 30px auto;
}

.disc-diagram img {
  max-width: 300px;
  height: auto;
  display: block;
  margin: 0 auto;
}

@media screen and (max-width: 767px) {
  .disc-traits-section .section-title_custom {
    padding-left: 0 !important;
    text-align: center !important;
  }

  .traits-row {
    gap: 50px;
    margin-bottom: 190px;
  }

  .trait-box {
    padding: 15px;
    width: 46%;
    margin-left: 0;
    font-size: 10px;
  }

  .row-2 {
    margin-bottom: 0 !important;
  }

  .disc-traits-section{
    background-image: none;
  }
  .disc-traits-section .traits-container .traits-row{
    gap:0px;
    margin:0px;
  }
}

</style>
  <section class="disc-traits-section">
    <h2 class="section-title section-title_custom">The Four <span class="highlightedText">DISC Traits</span></h2>
    <div class="traits-container">
      <div class="traits-row">
        <div class="trait-box dominant">
          <h3>Dominant:</h3>
          <p>
            These individuals are natural leaders who thrive in high-pressure environments. 
            They are assertive, goal-driven, and focused on getting results. They excel in 
            situations that require quick decision-making and taking charge of challenges 
            with confidence.
          </p>
        </div>
        <div class="trait-box influential">
          <h3>Influential:</h3>
          <p>
            These people light up any room with their outgoing and enthusiastic personality. 
            Skilled at persuasion and building connections, they thrive in social settings 
            and are driven by recognition and relationships. Their energy and charisma make 
            them natural motivators.
          </p>
        </div>
      </div>
      <div class="traits-row row-2">
        <div class="trait-box cautious">
          <h3>Cautious:</h3>
          <p>
            Detail-oriented and analytical, these individuals are perfectionists who value 
            accuracy and quality above all. They thrive in structured, rule-based environments 
            where their meticulous nature can shine. Their focus on precision makes them 
            excellent problem-solvers.
          </p>
        </div>
        <div class="trait-box supportive">
          <h3>Supportive:</h3>
          <p>
            These individuals are the glue that holds any team together. Dependable, patient, 
            and cooperative, they value harmony and stability. They excel in environments where 
            collaboration and consistency are prioritized, always seeking to bring out the 
            best in others.
          </p>
        </div>
      </div>
    </div>
  </section>
  